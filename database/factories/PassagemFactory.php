<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Passagem;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Passagem::class, function (Faker $faker) {
    
    $clientes = DB::select('select cpf from cliente');
    $len = count($clientes);

    return [
        'num_assento' => rand(0, 60),
        'codigo_linha' => rand(0, 10),
        'cpf_cliente' => strval(DB::select('select cpf from cliente where cpf = ?', [strval($clientes[rand(0, $len)])])),
        'data_compra' => $faker->dateTimeThisCentury()
    ];
});
