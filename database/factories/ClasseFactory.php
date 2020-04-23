<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
       		'nom'  => $faker->alphanumeric(4),
            'local'  => $faker->name(3),
            'nbBancs'  => $faker->integer()
    ];
});
