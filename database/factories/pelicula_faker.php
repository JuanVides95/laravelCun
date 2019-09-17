<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\pelicula;
use Faker\Generator as Faker;

$factory->define(App\pelicula::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'descripcion'=>$faker->paragraph,
        'fecha'=>$faker->date($format='Y-m-d', $max='now'),
        'precio'=>$faker->randomDigit
    ];
});
