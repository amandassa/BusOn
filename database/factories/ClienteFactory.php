<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Cliente::class, function (Faker $faker) {
    $email = $faker->email();
    $email = explode("@", $email);
    $nome_gerado = $faker->firstName();
    $nome = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $nome_gerado);
    return [
        'cpf' => strval(rand(10000000000, 99999999999)),
        'nome' => $nome,
        'email' => strtolower($nome).'@'.$email[1],
        'password' => Hash::make("12345678"),
    ];
});
