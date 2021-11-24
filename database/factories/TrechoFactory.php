<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Trecho;
use Faker\Generator as Faker;

$factory->define(Trecho::class, function (Faker $faker) {
    $horario = sprintf('%02d:%02d:00', rand(0, 23), rand(0, 59));
            
    return [
         'cidade_partida'=>$faker->city(), 
         'cidade_chegada'=>$faker->city(), 
         'duracao'=>$faker->time('H:i:s', $horario), 
         'preco'=>$faker->randomFloat(2, 0, 200), 
    ];
});
