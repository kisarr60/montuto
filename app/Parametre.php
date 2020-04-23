<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $fillable = [
    	'etablissement', 'ief', 'academie', 'adresse', 'email', 'phone', 'cetab', 'anscolaire'
    ];
}
