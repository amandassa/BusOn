<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'CPF' => strval(rand(10000000000, 99999999999)),
        'nome' => $faker->name(),
        'email' => $faker->email(),
        'password' => bcrypt("12345678"),
    ];
});
