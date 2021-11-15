<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    $nome = $faker->firstName();
    return [
        'CPF' => strval(rand(10000000000, 99999999999)),
        'nome' => $nome,
        'email' => strtolower($nome).'@'.$faker->domainName(),
        'password' => bcrypt("12345678"),
    ];
});
