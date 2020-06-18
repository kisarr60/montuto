<?php

namespace App\Imports;

use App\Candidat;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;

class CandidatImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        	return new Candidat([

        		'id'		=>	$row[0],
        		'num'		=>	$row[1],
		    	'ano1'		=>	$row[2],
		    	'ano2'		=>	$row[3],
		    	'nom'		=>	$row[4],
		    	'prenom'	=>	$row[5],
		    	'ne'		=>	$row[6],
		    	'lieu'		=>	$row[7],
		    	'eps'		=>	$row[8],
		    	'lv1'		=>	$row[9],
		    	'lv2'		=>	$row[10],
		    	'Eo'		=>	$row[11],
		    	'Ep'		=>	$row[12],
		    	'Ef'		=>	$row[13],
		    	'sexe'		=>	$row[14]
        	]);
    }
}
