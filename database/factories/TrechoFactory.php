<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trecho;
use Faker\Generator as Faker;
use Faker\Provider\pt_BR\Address as pt_BR;

$factory->define(Trecho::class, function (Faker $faker, pt_BR $pt_BR) {
    return [
         'cidade_partida'=>$pt_BR->state(), 
         'cidade_chegada'=>$pt_BR->state(), 
         'duracao'=>$faker->time('H:i:s', 'now'), 
         'preco'=>$faker->randomFloat(2, 0, null), 
         'ordem'=>rand(1, 10)
    ];
});
