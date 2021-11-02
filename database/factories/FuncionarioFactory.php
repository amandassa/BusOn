<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcionario;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' => $faker->name(),
        'email' => $faker->email(),
        'CPF' => Str::random_int(11),
        'password' => bcrypt($faker->password(6, 20)),
        'matricula' => Str::random_int(5),
    ];
});
