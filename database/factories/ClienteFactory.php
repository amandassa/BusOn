<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Cliente::class, function (Faker $faker) {
    $email = $faker->email();
    $email = explode("@", $email);
    $nome = $faker->firstName();
    return [
        'cpf' => strval(rand(10000000000, 99999999999)),
        'nome' => $nome,
        'email' => strtolower($nome).'@'.$email[1],
        'password' => Hash::make("12345678"),
    ];
});
