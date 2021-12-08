<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Array_;

class TrechosLinha extends Model
{
    protected $table = 'trechos_linha';
    
    protected $fillable = [
        'codigo_linha',         
        'codigo_trecho',
        'ordem'
    ];
    
    /**
     * Retorna um ou mais codigos de trechos conforme um dado valor (parametro) de uma dada coluna
     */
    public static function getCodigoTrecho($coluna, $parametro){
        $query = "SELECT codigo_trecho FROM trechos_linha WHERE ".$coluna." = :parametro";
        $codigo_trecho = DB::select($query, ['parametro' =>  $parametro]);        
        if($codigo_trecho)
            return $codigo_trecho;
        else
            return null;
    }

    /**
     * Retorna um ou mais codigos de linha conforme um dado valor (parametro) de uma dada coluna
     */
    public static function getCodigoLinha ($coluna, $parametro) {
        $query = "SELECT codigo_linha FROM trechos_linha WHERE ".$coluna." LIKE :parametro";                        
        $codigo_linha = DB::select($query, ['parametro' => $parametro]);        
        if($codigo_linha)
            return $codigo_linha;
        else
            return null;
    }

    /**
     * Retorna a ordem de um dado trechos em uma linha conforme um dado valor (parametro) de uma dada coluna
     */
    public static function getOrdem ($coluna, $parametro) {
        $query = "SELECT ordem from trechos_linha WHERE " . $coluna . " LIKE :parametro ";
        $ordem = DB::select($query, ['parametro' => $parametro]);
        return $ordem;        
    }


    public static function ordemAdicionar($codLinha, $codTrecho, $ordemFinal){
        DB::update("UPDATE trechos_linha set ordem=? where codigo_linha=? and codigo_trecho =?", [$ordemFinal, $codLinha, $codTrecho]);
    }

    public static function alteraOrdem($codigo_linha, $ordemNova, $codT){
        DB::update("UPDATE trechos_linha set ordem=? where codigo_trecho =? and codigo_linha=?",[$ordemNova,$codT, $codigo_linha]);
    }

        
        
    

    

    public static function ordena ($coluna, $parametro) {
        $query = "SELECT ordem, codigo_trecho from trechos_linha WHERE " . $coluna . " LIKE :parametro ";
        $ordem = DB::select($query, ['parametro' => $parametro]);
        return $ordem;        
    }

    /**
     * Remover trecho de uma linha
     */
    public static function removerTrecho($codigo_trecho, $codigo_linha){
        $ordem = DB::select("SELECT ordem FROM trechos_linha WHERE codigo_trecho = ? AND codigo_linha = ?",
         [$codigo_trecho, $codigo_linha]);
         $delete = DB::delete("DELETE from trechos_linha WHERE codigo_trecho = ? AND codigo_linha = ?", 
        [$codigo_trecho, $codigo_linha]);
        $trechos = DB::select("SELECT codigo_trecho, ordem FROM trechos_linha WHERE codigo_linha = ?", [$codigo_linha]);

        foreach($trechos as $trecho){
            if($trecho->ordem > $ordem[0]->ordem){
                DB::update("UPDATE trechos_linha SET ordem = :ord WHERE codigo_trecho = :ct AND codigo_linha = :cl", 
                ['ord'=>($ordem[0]->ordem), 'ct'=>$codigo_trecho, 'cl'=>$codigo_linha]);
                $ordem[0]->ordem = ($ordem[0]->ordem)-1;  // caso haja mais de um trecho após o removido
           }
        }
        

    }
}
