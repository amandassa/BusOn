<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Trecho extends Model {

    // atributos
    protected $table = 'trecho';
    protected $fillable = [
        'cidade_partida', 
        'cidade_chegada', 
        'duracao', 
        'preco', 
        'ordem'
    ];

    public static function getTrechosEmLinha($codigo_linha){
        $query = "SELECT * FROM trecho WHERE codigo IN (SELECT codigo_trecho FROM trechos_linha WHERE codigo_linha = :codigo)";
        $trechos = DB::select($query, ['codigo' => $codigo_linha]);
        if ($trechos){
            return $trechos;
        } else {
            return null;
        }
    }

    // método de acesso ao atributo cidade_origem
    public static function getCidade_partida($coluna, $param) {
        $query = "SELECT cidade_partida FROM trecho WHERE ".$coluna." LIKE :cod";
        $cidade_partida = DB::select($query, ['cod' => $param]);
        if ($cidade_partida){
            return $cidade_partida;
        } else {
            return null;
        }
    }

    public static function getCidade_chegada ($coluna, $param) {
        $query = "SELECT cidade_chegada FROM trecho WHERE ".$coluna." LIKE :cod";
        $cidade_chegada = DB::select($query, ['cod' => $param]);
        if ($cidade_chegada) {
            return $cidade_chegada;
        } else {
            return null;
        }
    }

    // método de acesso ao codigo
    public static function getCodigo($coluna, $parametro) {
        $query = "SELECT codigo FROM trecho WHERE ".$coluna." LIKE :cp";
        $codigo = DB::select($query, ['cp' => $parametro]);
        if($codigo)
            return $codigo;
        else
            return null;
    }

    // método de alteração do atributo codigo
    public function setCodigo(string $novo_codigo) {
        $this->codigo = $novo_codigo;
    }

    // método de acesso ao atributo preco
    public function getPreco() {
        return $this->preco;
    }

    // método de alteração do atributo preco
    public function setPreco(float $novo_preco) {
        $this->preco = $novo_preco;
    }

}
