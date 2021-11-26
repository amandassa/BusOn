<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passagem extends Model {

    protected $fillable = [
        'num_assento',
        'codigo_linha',
        'cpf_cliente',
        'data'
    ];

    public static function criar($num_assento, $codigo_linha, $cidade_partida, $cidade_chegada, $data, $cpf_cliente){
        confirmacao = DB::insert("INSERT INTO passagem VALUES(num_assento, codigo_linha, cidade_partida, cidade_chegada, data, cpf_cliente)");
        return confirmacao;
    }

    public static function getNumAssento($codigo_linha, $max_vagas){
        $assentos = DB::select('SELECT num_assento FROM passagem WHERE codigo_linha = :cod_linha', ['cod_linha' => $codigo_linha]);
        $lista_assentos = array();
        $assento = 0;

        // Gera lista de assentos ocupados
        for($i = 0; $i < sizeof($assentos); $i++){
            $lista_assentos[$i] = $assentos[$i]->num_assento;
        }

        // Verifica se há vagas
        if(sizeof($assentos) < $max_vagas){
            $assento_encontrado = false;                                    
            while(!$assento_encontrado)
            {
                $assento = $assento + 1;
                if(!in_array($assento, $lista_assentos)){
                    $assento_encontrado = true;                    
                }
            }            
        }        
        else
        {
            return 0;    
        }   

        return $assento;
    }
}
