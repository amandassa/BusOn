<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'CPF' => strval(rand(10000000000, 99999999999)),
        'nome' => $faker->firstName(),
        'email' => $faker->email(),
        'password' => Hash::make("12345678"),
    ];
});
