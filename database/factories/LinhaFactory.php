<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Linha;
use Faker\Generator as Faker;

$factory->define(Linha::class, function (Faker $faker) {
    return [
        'direta' => rand(0, 1),
        'total_vagas' => 60
    ];
});
