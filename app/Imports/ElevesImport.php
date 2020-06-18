<?php

namespace App\Imports;

use App\Eleve;
use Maatwebsite\Excel\Concerns\ToModel;

class ElevesImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Eleve([
            'id'            => $row[0],
            'prenoms'       => $row[1],
            'nom'           => $row[2],
            'datnais'       => $row[3],
            'lieunais'      => $row[4],
            'sexe'          => $row[5],
            'matricule'     => $row[6],
            'classe_id'     => $row[7],
            'photo'         => $row[8],
            'prenomPere'    => $row[9],
            'prenomNomMere' => $row[10],
            'tuteur'        => $row[11],
            'contact'       => $row[12],
            'adresse'       => $row[13],


        ]);
    }
}
