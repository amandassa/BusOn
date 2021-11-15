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
}
