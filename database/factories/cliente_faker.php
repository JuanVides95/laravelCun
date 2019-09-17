<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\cliente;
use Faker\Generator as Faker;

$factory->define(App\cliente::class, function (Faker $faker) {
    return [
      'nombre'=>$faker->name,
      'direccion'=>$faker->address, 
      'telefono'=>$faker->phoneNumber 
    ];
});
