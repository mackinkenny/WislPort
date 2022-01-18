<?php


namespace App\Exports\Sheets;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OverallReportSheet implements WithTitle, FromView, ShouldAutoSize, WithStyles
{
    protected $overalls;

    public function __construct($overalls)
    {
        $this->overalls = $overalls;
    }

    public function title(): string
    {
        return __('Overall Section Summary');
    }

    public function view(): View
    {
        return \view('exports.overall', [
            'overalls' => $this->overalls,
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->mergeCells('A1:E1');

        return [
            '3' => ['font' => ['bold' => true, 'size' => 18]],
        ];
    }
}
