<?php

namespace App\Http\Controllers;

use App\Exports\AdminReport;
use App\Exports\ReportsExport;
use App\Exports\Sheets\SectionReportSheet;
use App\Models\Answer;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Report;
use App\Models\Section;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Reader\Word2007;
use PhpOffice\PhpWord\Shared\Html;

class ReportController extends Controller
{
    public function all(Company $company)
    {
        $reports = Report::where('company_id', $company->id)->orderBy('version', 'desc')->get(['version', 'active', 'updated_at']);
        $rep = collect();
        $col = 0;
        foreach ($reports as $report) {
            if ($col != $report->version){
                $rep->push($report);
            }
            $col = $report->version;
        }
        $reports = $rep;
        $version = Report::where('company_id', $company->id)->where('active',1)->first();
        $version = $version ? $version->version : 0;
        $sections = Section::all()->map(function ($section) {
            return [
                'id' => $section->id,
                'title' => $section->title,
            ];
        });

        $company_id = Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id;

        return Inertia::render('Report/Index', [
            'report' => $reports,
            'sections' => $sections,
            'cid' => $company_id,
            'id' => 'reports',
            'version' => $version
        ]);
    }

    public function index($id, $version = null){
        $sections = Section::all()->map(function ($section) {
            return [
                'id' => $section->id,
                'title' => $section->title,
            ];
        });

        $company_id = Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id;

        if ($version) {
            $reportQuery = Report::query()->where('version', $version);
        } else {
            $reportQuery = Report::query()->where('active', 1);
        }

        $reports = $reportQuery->where('company_id',$company_id)->where('section_id',$id)->With('section','block')->get()->sortBy('block_id');

        return Inertia::render('Report/Main', [
            'sections' => $sections,
            'report' => $reports,
            'id' => 'report',
            'sect' => $id,
            'cid' => $company_id,
            'version' => $version,
        ]);
    }

    public function overall($version = null){
        $company_id = Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id;
        $overalls = Report::overall($company_id, $version);
        $chapters = Report::overall_chapters($company_id, $version);
        $sections = Section::all()->map(function ($section) {
            return [
                'id' => $section->id,
                'title' => $section->title,
            ];
        });


        return Inertia::render('Report/Overall', [
            'sections' => $sections,
            'reports' => $overalls,
            'chapters' => $chapters,
            'id' => 'report',
            'cid' => $company_id,
            'version' => $version,
        ]);
    }

    public function store($id, $company)
    {
        $answer = Answer::find($id);

        $block = $answer->question->block;
        $report = Report::where('block_id', $block->id)->where('active', 1)->where('company_id', $company)->first();
        $reportVersion = Report::select('version')->where('company_id', $company)->where('active', 0)->groupBy('version')->orderBy('version', 'desc')->pluck('version')->first();
        if (!$report) {
            $report = new Report();
            $report->active = true;
            $report->version = $reportVersion ? $reportVersion + 1 : 1;
            $report->company_id = $company;
            $report->block_id = $block->id;
            $report->section_id = $block->section->id;
            $questions = collect();
            foreach ($block->questions as $question) {
                if ($question->id == $answer->question->id){
                    $questions->push(['question' => $question->id, 'answer' => $answer->id]);
                }
                else{
                    $questions->push(['question' => $question->id, 'answer' => null]);
                }
            }
            $scores = ['main' => ['scores' => null, 'trust' => null, 'impartiality' => null, 'protection' => null]];
            $points = ['main' => ['scores' => ['total' => 0, 'actual' => 0], 'trust' => ['total' => 0, 'actual' => 0], 'impartiality' => ['total' => 0, 'actual' => 0], 'protection' => ['total' => 0, 'actual' => 0]]];
            $report->scores = $scores;
            $report->points = $points;
            $report->questions = $questions;
            $report->save();
        }
        else {
            $questions = $report->questions;
            foreach ($questions as $key => $question) {
                if ($question['question'] == $answer->question->id){
                    $question['answer'] = intval($id);
                    $questions[$key] = $question;
                    break;
                }
            }
            $report->questions = $questions;
            $report->save();
        }

        $report->formula();

        return response()->json([
            'status' => 'true'
        ]);
    }

    public function store_comment($value, $company_id, $block_id){
        $comment = Comment::where('company_id', $company_id)->where('block_id', $block_id)->first();

        if (!$comment) {
             $comment = new Comment();
        }

        $comment->comment = $value;
        $comment->company_id = $company_id;
        $comment->block_id = $block_id;
        $comment->save();

        return response()->json([
            'status' => 'true'
        ]);
    }

    public function close(Company $company)
    {
        $company->report()->where('active', 1)->update(['active' => 0]);

        return redirect()->back();
    }

    public function ReportToPdf($id, $version = null){
        if ($version) {
            $reportQuery = Report::query()->where('version', $version);
        } else {
            $reportQuery = Report::query()->where('active', 1);
        }
        $reports = $reportQuery->where('company_id', $id)->With('section','block')->get()->sortBy('block_id')->groupBy('section_id');
        $company = Company::find($id);
        $overalls = Report::overall($company->id, $version);
        $chapters = Report::overall_chapters($company->id, $version);
        $pdf = PDF::loadView('report.pdf', ['reports' => $reports, 'overalls' => $overalls, 'chapters' => $chapters]);
        Storage::put('public/pdf/'.$company->title.'.pdf', $pdf->output());
        return '/storage/pdf/'.$company->title.'.pdf';
    }

    public function reportToExcel($id, $version = null) {
        if ($version) {
            $reportQuery = Report::query()->where('version', $version);
        } else {
            $reportQuery = Report::query()->where('active', 1);
        }
        $reports = $reportQuery->where('company_id', $id)->With('section','block')->get()->sortBy('block_id')->groupBy('section_id');
        $company = Company::find($id);
        $overalls = Report::overall($company->id, $version);
        $chapters = Report::overall_chapters($company->id, $version);

        return Excel::download(new ReportsExport($reports, $overalls, $chapters), $company->title.'.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function reportToWord($id, $version = null) {

        if ($version) {
            $reportQuery = Report::query()->where('version', $version);
        } else {
            $reportQuery = Report::query()->where('active', 1);
        }
        $reports = $reportQuery->where('company_id', $id)->With('section','block')->get()->sortBy('block_id')->groupBy('section_id');
        $company = Company::find($id);
        $overalls = Report::overall($company->id, $version);
        $chapters = Report::overall_chapters($company->id, $version);

        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        Html::addHtml($section, view('exports.overall', [
            'overalls' => $overalls,
        ])->render());
        foreach ($reports as $key => $report) {
            $section = $phpWord->addSection();
            Html::addHtml($section, view('exports.reports', [
                'key' => $key,
                'report' => $report,
                'sectionTitle' => $report[0]->section->title,
            ])->render());
        }

        return $phpWord->save($company->title.'.doc', 'HTML', true);
    }

    public function adminReport() {
        $companies = Company::With( 'users')->With('owner')->latest()->get();
        return Excel::download(new AdminReport($companies), Carbon::now().'.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
}
