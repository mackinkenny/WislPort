<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AdminReport implements FromView, ShouldAutoSize
{
    protected $companies;

    public function __construct($companies)
    {
        $this->companies    = $companies;
    }

    public function view(): View
    {
        return view('exports.adminReport', [
            'companies'     => $this->companies,
        ]);
    }
}
