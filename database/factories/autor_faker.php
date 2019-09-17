<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\autor;
use Faker\Generator as Faker;

$factory->define(App\autor::class, function (Faker $faker) {
    return [
      'nombre'=>$faker->name,
      'telefono'=>[
      	"nombre"=>$faker->name,
      	"telefono"=>$faker->phoneNumber
        ]    
    ];
});
