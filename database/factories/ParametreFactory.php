<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Parametre;
use Faker\Generator as Faker;

$factory->define(Parametre::class, function (Faker $faker) {
    return [
        'etablissement' => $faker->name,
        'ief'			=> $faker->name(6),
        'academie'		=> $faker->name,
        'adresse'		=> $faker->adresse,
        'email'			=> $faker->unique()->safeEmail,
        'phone'			=> $faker->telephon,
        'cetab'			=> $faker->name,
        'anscolaire'	=> $faker->year,
    ];
});
