<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{

	protected $fillable = [

		'prenoms'    ,
        'nom'        ,
        'datnais'    ,
        'lieunais'   ,
        'sexe'       ,
        'matricule'  ,
        'classe_id'  ,
        'photo'      ,
        'prenomPere' ,
        'prenomNomMere',
        'tuteur'      ,
        'contact'     ,
        'adresse'     

	];

    public function classe()
    {

    	return $this->belongsTo('App\Classe');
    }
}
