<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'CPF' => Str::random_int(11),
        'nome' => $faker->name(),
        'email' => $faker->email(),
        'password' => bcrypt($faker->password(6, 20)),
    ];
});
