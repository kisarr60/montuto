<?php

namespace App\Exports;

use App\Candidat;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class CandidatExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       return Candidat::all();
    }


    public function headings(): array
    {
        return [
	'id',
	'num',
    	'ano1',
    	'ano2',
    	'nom',
    	'prenom',
    	'ne',
    	'lieu',
    	'eps',
    	'lv1',
    	'lv2',
    	'Eo',
    	'Ep',
    	'Ef',
    	'sexe',
    	'created_at',
    	'updated_at'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:P1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
}
