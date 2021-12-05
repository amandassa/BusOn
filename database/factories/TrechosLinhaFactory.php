<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TrechosLinha;
use App\Models\Trecho;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

$factory->define(TrechosLinha::class, function (Faker $faker) {    
        //codigo linha e codigo trecho são relacionais
        // codigo de trechoslinha é incrementável
        //'partida' => $faker->dateTimeThisCentury(),
        //'dia_semana'=> random_int(1,7),
        //'ordem'=> random_int(1,3)

        $codigo = DB::select("SELECT codigo FROM linha WHERE codigo NOT IN (SELECT DISTINCT codigo_linha FROM trechos_linha)");                
        $linha = DB::select("SELECT * FROM linha where codigo = :codigo", ['codigo' => ($codigo[0]->codigo)]);
        $tamanho_trechos = DB::select("SELECT count(*) as 'tamanho' FROM trecho")[0]->tamanho;                
        $tamanho_linha = 4;
        $trechos = [];
        $trecho = [];
        $t = array();
        for($i = 0; $i < $tamanho_linha; $i++){
            if ($i == 0){
                $trecho = DB::select("SELECT * FROM trecho WHERE codigo = :codigo", ['codigo' => random_int(0, $tamanho_trechos)]);                                
                if($trecho == null) {
                    $trecho = factory(Trecho::class, 1)->make()->toArray();
                    DB::insert('insert into trecho(cidade_partida, cidade_chegada, duracao, preco) values(?, ?, ?, ?)',
                    [$trecho[0]['cidade_partida'], $trecho[0]['cidade_chegada'], $trecho[0]['duracao'], $trecho[0]['preco']]);
                    $trecho = DB::select("SELECT * FROM trecho WHERE cidade_partida = :cp and cidade_chegada = :cc", ['cp' => $trecho[0]['cidade_partida'], 'cc' => $trecho[0]['cidade_chegada']])[0];
                } else {
                    $trecho = $trecho[0];
                }
            } else {
                $trecho = factory(Trecho::class, 1)->make(['cidade_partida' =>  $trecho->cidade_chegada])->toArray();
                DB::insert('insert into trecho(cidade_partida, cidade_chegada, duracao, preco) values(?, ?, ?, ?)',
                [$trecho[0]['cidade_partida'], $trecho[0]['cidade_chegada'], $trecho[0]['duracao'], $trecho[0]['preco']]);
                $trecho = DB::select("SELECT * FROM trecho WHERE cidade_partida = :cp and cidade_chegada = :cc", ['cp' => $trecho[0]['cidade_partida'], 'cc' => $trecho[0]['cidade_chegada']])[0];
            }
            
            $t['codigo_linha'] = $linha[0]->codigo;
            $t['codigo_trecho'] = $trecho->codigo;
            $t['ordem'] = $i+1;
            array_push($trechos, $t);
        }

    return $trechos;
});
