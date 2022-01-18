<?php


namespace App\Exports\Sheets;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SectionReportSheet implements WithTitle, FromView, ShouldAutoSize, WithStyles
{
    protected $key, $report, $sectionTitle;

    public function __construct($key, $report, $sectionTitle)
    {
        $this->report = $report;
        $this->key = $key;
        $this->sectionTitle = $sectionTitle;
    }

    public function title(): string
    {
        return __('Section'). ' ' . $this->key . '. '. $this->sectionTitle;
    }

    public function view(): View
    {
        return \view('exports.reports', [
            'key' => $this->key,
            'report' => $this->report,
            'sectionTitle' => $this->sectionTitle,
        ]);
    }

    public function styles(Worksheet $sheet): array
    {
        $sheet->mergeCells('A1:E1');

        return [
            '3' => ['font' => ['bold' => true, 'size' => 18]],
        ];
    }
}
