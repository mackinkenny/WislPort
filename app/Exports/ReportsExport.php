<?php

namespace App\Exports;

use App\Exports\Sheets\OverallReportSheet;
use App\Exports\Sheets\SectionReportSheet;
use App\Models\Report;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class ReportsExport implements FromView, ShouldAutoSize, WithMultipleSheets
{
    protected $reports;
    protected $overalls;
    protected $chapters;

    public function __construct($reports, $overalls, $chapters)
    {
        $this->reports = $reports;
        $this->overalls = $overalls;
        $this->chapters = $chapters;
    }

    public function view(): View
    {
        return \view('exports.reports', [
            'reports' => $this->reports,
            'overalls' => $this->overalls,
            'chapters' => $this->chapters,
        ]);
    }

    public function sheets(): array
    {
        $sheets = [];

        $sheets[] = new OverallReportSheet($this->overalls);
        foreach ($this->reports as $key => $report) {
            $sheets[] = new SectionReportSheet($key, $report, $report[0]->section->title);
        }

        return $sheets;
    }
}
