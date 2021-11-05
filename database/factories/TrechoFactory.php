<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trecho;
use Faker\Generator as Faker;

$factory->define(Trecho::class, function (Faker $faker) {
    return [
         'cidade_partida'=>$faker->city(), 
         'cidade_chegada'=>$faker->city(), 
         'duracao'=>$faker->time('H:i:s', 'now'), 
         'preco'=>$faker->randomFloat(2, 0, null), 
    ];
});
