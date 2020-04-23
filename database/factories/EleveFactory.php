<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {

     return [
        
    		'prenoms' => $faker->name,
            'nom' => $faker->name,
            'datnais' => $faker->date,
            'lieunais' => $faker->name,
            'matricule' => str_random(6),
            'classe' => array_rand(['3 MA', '3 MB', '3 MC', '3 MD']),
            'sexe' => array_rand(['M', 'F']),
            'provenance' => $faker->name(6)
        ];
});
