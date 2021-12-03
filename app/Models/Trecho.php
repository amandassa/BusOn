<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddTrechoInLinhaRequest;
use Illuminate\Http\Request;

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

    public static function getDuracao($coluna, $parametro){
        $query = "SELECT duracao FROM trecho WHERE ".$coluna." LIKE :parametro";
        $duracao = DB::select($query, ['parametro' => $parametro]);
        if($duracao)
            return $duracao;
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

    public static function getTrecho(string $cod){
        
    }

    public static function getTrechoInfo(AddTrechoInLinhaRequest $request){
        $origem = $request['origem'];
        $destino = $request['destino'];

        $info = DB::select("SELECT * FROM trecho WHERE cidade_partida = ? AND cidade_chegada = ?;", [$origem, $destino])[0];
        return $info;
    }

    public static function getAll(){
        $all = DB::select("SELECT * FROM trecho;");
        return $all;
    }

    public static function getTrechoList(array $cod_array){
        $query = "SELECT * FROM trecho WHERE codigo IN (%d";
        foreach($cod_array as $cod){
            if($cod != null){
                $query = sprintf($query, $cod);
                $query .= ", %d";
            }
        }
        $query = sprintf($query, 0);
        $query .= ");";
        dd($query);
    }

    public static function consulta(Request $request){
        $query = "SELECT * FROM trecho";
        $plus = false;
        if($request['codigo'] != null){
            $query .= " WHERE codigo = %d";
            $query = sprintf($query, $request['codigo']);
            $plus = true;
        }
        if($request['origem'] != null){
            if($plus == true) $query .= " AND";
            else $query .= " WHERE";
            $query .= " cidade_partida = '%s'";
            $query = sprintf($query, $request['origem']);
            $plus = true;
        }
        if($request['destino'] != null){
            if($plus == true) $query .= " AND";
            else $query .= " WHERE";
            $query .= " cidade_chegada = '%s'";
            $query = sprintf($query, $request['destino']);
            $plus = true;
        }
        if($request['preço'] != null){
            if($plus == true) $query .= " AND";
            else $query .= " WHERE";
            $query .= " preco= %d";
            $query = sprintf($query, $request['preço']);
            $plus = true;
        }
        $query .= ";";

        $result = DB::select($query);
        return $result;
    }
}
