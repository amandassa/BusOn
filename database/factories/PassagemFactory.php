<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Passagem;
use App\Models\Linha;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(Passagem::class, function (Faker $faker) {
    
    $clientes = DB::select('select cpf from cliente');
    $len = count($clientes);
    $linhas = DB::select('select * from linha');
    $escolhida = null;
    $quantidade = 0; 

    // Percorre todas as linhas
    foreach($linhas as $linha){
        $quantidade = DB::select('select count(*) as total from trechos_linha where codigo_linha = ?', [$linha->codigo])[0]->total;
        // Seleciona a linha que possua vagas
        if($quantidade < $linha->total_vagas){
            $escolhida = $linha;
            break;
        }
    }

    $data = new DateTime();
    $dias_semana = explode(';', $escolhida->dias_semana);
    // enquanto o dia da semana for diferente do dia da semana '5'
    while (date('w', $data->getTimestamp()) <> $dias_semana[rand(0, count($dias_semana)-1)] ) {
        // adiciona 1 dia na data
        $data->add(new DateInterval('P1D'));
    }
    
    return [
        'num_assento' => Passagem::getNumAssento($escolhida->codigo, $escolhida->total_vagas),
        'codigo_linha' => $escolhida->codigo,
        'cpf_cliente' => $clientes[rand(0, $len-1)]->cpf,
        'cidade_partida' => DB::select('select cidade_partida from trecho where codigo = (select codigo_trecho from trechos_linha where codigo_linha = ? and ordem = 1)', [$escolhida->codigo])[0]->cidade_partida,
        'cidade_chegada' => DB::select('select cidade_chegada from trecho where codigo = (select codigo_trecho from trechos_linha where codigo_linha = ? and ordem = ?)', [$escolhida->codigo, (rand(1, $quantidade))])[0]->cidade_chegada,
        'data' => date_format($data, 'Y-m-d h:i:s'),
    ];
});
