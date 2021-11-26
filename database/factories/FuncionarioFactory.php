<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcionario;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->firstName(),
        'email' => $faker->email(),
        'cpf' => strval(rand(10000000000, 99999999999)),
        'password' => Hash::make("12345678"),
        'matricula' => strval(rand(10000, 99999)),
        'is_admin' => rand(0,1)
    ];
});
