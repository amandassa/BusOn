<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrechosLinha extends Model
{
    protected $table = 'trechos_linha';
    
    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
    
    public function getCodigoTrecho(String $coluna, String $parametro){
        $codigo_trecho = DB::select("SELECT codigo_trecho FROM trechos_linha WHERE :coluna = :parametro", ['col' => $coluna, 'par' =>$parametro]);
        if($codigo_trecho)
            return $codigo_trecho[0]->codigo_trecho;
        else
            return null;
    }
}
