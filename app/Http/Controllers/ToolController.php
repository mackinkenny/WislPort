<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Comment;
use App\Models\Company;
use App\Models\Question;
use App\Models\Report;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ToolController extends Controller
{
    public function index(){
        $isAdmin = Auth::user()->hasRole('Admin');
        $reports = Report::where('company_id', Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id)->where('active', 1)->get();
        $check = count($reports);
        return Inertia::render('Tool/Main', ['isAdmin' => $isAdmin, 'check' => $check]);
    }

    public function blocks($id) {
        $company_id = Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id;
        $reports = Report::where('section_id',$id)->where('company_id',$company_id)->where('active', 1)->get();
        $version = Report::where('company_id', $company_id)->where('active',1)->first();
        $version = $version ? $version->version : 0;
        $ids = collect();
        $status = Auth::user()->hasRole('Admin');


        foreach ($reports as $report){
            $ids->push($report->block_id);
        }
        $blocks = Block::where('section_id', $id)->get()->map(function ($block) {
            return [
                'id' => $block->id,
                'title' => $block->title,
                'section_id' => $block->section_id,
            ];
        });
        $sections = Section::all()->map(function ($section) {
           return [
                'id' => $section->id,
                'title' => $section->title,
           ];
        });

        return Inertia::render('Tool/Blocks', [
            'blocks' => $blocks,
            'sections' => $sections,
            'id' => $id,
            'ids' => $ids,
            'status' => $status,
            'company_id' => $company_id,
            'version' => $version,
        ]);
    }

    public function getQuestions(Request $request){

        $blocks = Block::whereIn('id',$request->all())->With('questions.answers')->get();
        $company_id = Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id;
        foreach ($blocks as $block){
        $report = Report::where('block_id', $block->id)->where('company_id', $company_id)->where('active', 1)->first();
        $reportVersion = Report::select('version')->where('company_id', $company_id)->where('active', 0)->groupBy('version')->orderBy('version', 'desc')->pluck('version')->first();
        if (!$report) {
            $report = new Report();
            $report->active = true;
            $report->version = $reportVersion ? $reportVersion + 1 : 1;
            $report->company_id = $company_id;
            $report->block_id = $block->id;
            $report->section_id = $block->section->id;
            $questions = collect();
            foreach ($block->questions as $question) {
                    $questions->push(['question' => $question->id, 'answer' => null]);
            }
            $scores = ['main' => ['scores' => null, 'trust' => null, 'impartiality' => null, 'protection' => null]];
            $points = ['main' => ['scores' => ['total' => 0, 'actual' => 0], 'trust' => ['total' => 0, 'actual' => 0], 'impartiality' => ['total' => 0, 'actual' => 0], 'protection' => ['total' => 0, 'actual' => 0]]];
            $report->scores = $scores;
            $report->points = $points;
            $report->questions = $questions;
            $report->save();
        }
        }

        $sections = Section::all()->map(function ($section) {
            return [
                'id' => $section->id,
                'title' => $section->title,
            ];
        });
        $id = $blocks[0]->section_id;
        $company_id = Auth::user()->hasRole('Admin') ? Auth::user()->org->id : Auth::user()->company->id;
        $reports = Report::where('company_id', $company_id)->where('section_id', $id)->where('active', 1)->get();
        $comments = Comment::where('company_id', $company_id)->get();

        foreach ($reports as $report) {
            if (array_search($report->block_id, $request->all()) === false) {
                $report->delete();
            }
        }
        foreach ($comments as $comment) {
            if (array_search($comment->block_id, $request->all()) === false) {
                $comment->delete();
            }
        }
        $version = Report::where('company_id', $company_id)->where('active',1)->first();
        $version = $version ? $version->version : 0;
        return Inertia::render('Tool/Questions', [
            'blocks' => $blocks,
            'sections' => $sections,
            'id' => $id,
            'company_id' => $company_id,
            'reports' => $reports,
            'comms' => $comments,
            'version' => $version,
        ]);
    }
}
