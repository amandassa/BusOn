<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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


    public static function ordena ($coluna, $parametro) {
        $query = "SELECT ordem, codigo_trecho from trechos_linha WHERE " . $coluna . " LIKE :parametro ";
        $ordem = DB::select($query, ['parametro' => $parametro]);
        return $ordem;        
    }
}
