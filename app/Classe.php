<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    public function eleves()
    {

    	return $this->hasMany('App\Eleve');
    }
}
