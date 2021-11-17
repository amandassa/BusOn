<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TrechosLinha;
use Faker\Generator as Faker;

$factory->define(TrechosLinha::class, function (Faker $faker) {
    return [
        //codigo linha e codigo trecho são relacionais
        // codigo de trechoslinha é incrementável
        'partida' => $faker->dateTimeThisCentury(),
        'dia_semana'=> random_int(1,7),
        'ordem'=> random_int(1,3)
    ];
});
