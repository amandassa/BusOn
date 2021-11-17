<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Funcionario;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Funcionario::class, function (Faker $faker) {
    $nome = $faker->firstName();
    return [
        'nome' => $nome,
        'email' => strtolower($nome).'@'.$faker->domainName(),
        'CPF' => strval(rand(10000000000, 99999999999)),
        'password' => Hash::make("12345678"),
        'matricula' => strval(rand(10000, 99999)),
        'is_admin' => rand(0,1)
    ];
});
