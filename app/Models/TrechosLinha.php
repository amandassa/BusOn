<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TrechosLinha extends Model
{
    protected $table = 'trechos_linha';
    
    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
    
    public static function getCodigoTrecho($coluna, $parametro){
        $query = "SELECT codigo_trecho FROM trechos_linha WHERE ".$coluna." = ?";
        $codigo_trecho = DB::select($query, [$parametro]);        
        if($codigo_trecho)
            return $codigo_trecho;
        else
            return null;
    }

    public static function getCodigoLinha ($coluna, $parametro) {
        $query = "SELECT codigo_linha FROM trechos_linha WHERE " . $coluna . " LIKE :ct";
        $codigo_linha = DB::select($query, ['ct' => $parametro]);
        if($codigo_linha)
            return $codigo_linha;
        else
            return null;
    }

    public static function getOrdem ($coluna, $parametro) {
        $query = "SELECT ordem from trechos_linha WHERE " . $coluna . " LIKE :cod ";
        $ordem = DB::select($query, ['cod' => $parametro]);
        return $ordem;
        /*
        if ($ordem) {
            return $ordem;
        } else {
            return null;
        }*/
    }
}
