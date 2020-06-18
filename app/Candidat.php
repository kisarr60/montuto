<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    protected $fillable = [
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
    	'sexe'
    ];
}
