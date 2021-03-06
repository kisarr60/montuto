<?php

  

function changeDateFormate($date,$date_format){

    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    

}

   

function productImagePath($image_name)

{

    return public_path('images/products/'.$image_name);

}

function eleveImagePath($image_name)

{

    return public_path('images/eleves/'.$image_name);

}

function get_nombreEleves($classe) {
        $nbEleves = DB::table('eleves')->where('classe_id', $classe)->count();
         
        return (isset($nbEleves) ? $nbEleves : '');
    }

function get_ElevesGarcon($classe) {
         
        $nbSexe = DB::table('eleves')
        ->where('classe_id', $classe)
        ->where('sexe', 'M')
        ->count();
         	return $nbSexe . ($nbSexe>1 ? ' garçons' : ' garçon');

         } 

function get_ElevesFille($classe) {
         
        $nbSexe = DB::table('eleves')
        ->where('classe_id', $classe)
        ->where('sexe', 'F')
        ->count();
         	return $nbSexe . ($nbSexe>1 ? ' filles' : ' fille');

         }


