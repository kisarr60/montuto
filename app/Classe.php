<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
	 protected $guarded = [];

    public function eleves()
    {
    	return $this->hasMany('App\Eleve');
    }

    public function salle()
    {
    	return $this->belongsTo('App\Salle');
    }
}
