<?php

namespace App\Exports;

use App\Eleve;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class EleveExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Eleve::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'prenoms'  ,
            'nom'      ,
            'datnais'  ,
            'lieunais' ,
            'sexe'     ,
            'matricule',
            'classe_id',
            'photo'    ,
            'prenomPere'  ,
            'prenomNomMere',
            'tuteur' ,
            'contact',
            'adresse',
            'Created at',
            'Updated at'
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
