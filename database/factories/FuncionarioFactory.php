<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName(),
        'email' => $faker->email(),
        'CPF' => strval(rand(10000000000, 99999999999)),
        'password' => bcrypt("12345678"),
        'matricula' => strval(rand(10000, 99999)),
        'is_admin' => rand(0,1)
    ];
});
