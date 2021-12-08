<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddTrechoInLinhaRequest;
use App\Http\Requests\BuscaTrechoRequest;
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

    /**
     * Metodo retorna um ou mais codigos conforme um valor (parametro)de uma coluna especificada
     * @return [codigos] ou codigo
     */
    public static function getCodigo($coluna, $parametro) {
        $query = "SELECT codigo FROM trecho WHERE ".$coluna." LIKE :parametro";
        $codigo = DB::select($query, ['parametro' => $parametro]);
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


    public static function getInfoTrecho(Request $request){
        $codigo_linha = $request['codigo'];
        $selec= DB::select("SELECT * FROM trechos_linha WHERE codigo_linha = ?", [$codigo_linha]);
        $trechos = [];

       foreach ($selec as $trecho_sel){
           $infos =  DB::select("SELECT * FROM trecho NO WHERE codigo =?", [$trecho_sel->codigo_trecho])[0];
           $trecho = [
               'codigo' => $trecho_sel->codigo_trecho,
               'codigo_trecholinha' => $trecho_sel->codigo,
               'codigo_linha' => $trecho_sel->codigo_linha,
               'ordem' => $trecho_sel->ordem,
               'cidade_partida' => $infos->cidade_partida,
               'cidade_chegada' => $infos->cidade_chegada,
               'duracao' =>$infos->duracao,
               'preco' => $infos->preco
                
                
                
           ]; array_push($trechos, $trecho);
       }
       return $trechos;
    }


    public static function getTodos(Request $request){
        $cod = DB::select("SELECT codigo_trecho from trechos_linha where codigo_linha = ?", [$request['codigo']]);
        $selecionar = DB::select("SELECT * FROM trecho;"); 
        $trechos = [];
        
        

       foreach ($selecionar as $trecho_sel){
           $trecho = [
               'codigo' => $trecho_sel->codigo,
               'cidade_partida' => $trecho_sel->cidade_partida,
               'cidade_chegada' => $trecho_sel->cidade_chegada,
               'duracao' =>$trecho_sel->duracao,
               'preco' => $trecho_sel->preco,
               'ordem' => ""
                
           ]; array_push($trechos, $trecho);
       } 

       foreach($cod as $codigoT){
           foreach($trechos as $tr=>$value){
               if($codigoT->codigo_trecho == $value['codigo']){
                  unset($trechos[$tr]);
               }
               
           }
       }

       return $trechos;
    }


   


    public static function edicao( Request $request){
        $codigo_trecho = $request['codigo'];
        $selecionar = DB::select("SELECT * FROM trecho where codigo=?",[$codigo_trecho]); 
        $partida = $request['partida'];
        $destino = $request['destino'];
        $preco = $request['preco'];
        $duracao = $request['duracao'];
        $ordem_trecho = $request ['ordem'];
        $codigo_linha =$request['codLinha'];
        

        if(empty($partida) or empty($destino) or empty($preco) or empty($duracao)){
            return 1;
        }else if(empty($ordem_trecho)){
            DB::update('UPDATE trecho set cidade_partida = ?, cidade_chegada = ?, duracao =?, preco =? 
            where codigo =?',[$partida, $destino, $duracao, $preco, $codigo_trecho]);
            Log::editarTrecho($codigo_trecho);
            return 2;
        }else{
            DB::update('UPDATE trecho set cidade_partida = ?, cidade_chegada = ?, duracao =?, preco =? 
            where codigo =?',[$partida, $destino, $duracao, $preco, $codigo_trecho]);
            TrechosLinha::alteraOrdem($codigo_linha, $ordem_trecho, $codigo_trecho);
            return 2;

        }


    


    }

    public static function addTrechoinLinha(Request $request){
       $codigo_trecho = $request['checked'];
       $codigo_linha = $request['codLinha'];
       $codT=explode(',', $codigo_trecho);
       $codT =array_diff( $codT, array("",0,null));
       if(empty($codT) or empty($codigo_linha)){

           return 1;
       }else{
            foreach ($codT as $codigoT){
             if(empty($codigoT) or empty($codigo_linha)){
                return 1;
             }else{
                DB::update("INSERT INTO trechos_linha set codigo_linha=?, codigo_trecho=?, ordem=?",[$codigo_linha, $codigoT, 0]);
                $ordens = TrechosLinha::getOrdem('codigo_linha', $codigo_linha); 
                $final = count($ordens);
                TrechosLinha::ordemAdicionar($codigo_linha,$codigoT,$final);
             }
            
        }
            return 2;
       }
    }
}
