<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->name(),
        'email' => $faker->email(),
        'CPF' => Str::random_int(11),
        'senha' => $faker->password(),
        'matricula' => Str::random_int(5),
    ];
});
