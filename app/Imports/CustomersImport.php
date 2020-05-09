<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            
            'prenoms'       => $row[0],
            'nom'           => $row[1],
            'datnais'       => $row[2],
            'lieunais'      => $row[3],
            'sexe'          => $row[4],
            'matricule'     => $row[5],
            'classe_id'     => $row[6],
            'photo'         => $row[7],
            'prenomPere'    => $row[8],
            'prenomNomMere'   => $row[9],
            'tuteur'        => $row[10],
            'contact'       => $row[11],
            'adresse'       => $row[12],


        ]);
    }
}
