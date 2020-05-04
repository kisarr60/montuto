<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{

	protected $guarded = [];

    public function classe()
    {

    	return $this->belongsTo('App\Classe');
    }
}
