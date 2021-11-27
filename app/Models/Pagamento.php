<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pagamento extends Model
{
    public static function criar($realizado, $forma_pagamento, $codigo_passagem){
        confirmacao = DB::insert("INSERT INTO pagamento (realizado, forma_pagamento, codigo_passagem) VALUES (?, ?, ?)", [$realizado, $forma_pagamento, $codigo_passagem]);
        return confirmacao;
    }

    public static function getCodigo($parametro, $codigo){
        $query = "SELECT codigo FROM pagamento WHERE ".$parametro." = :codigo";
        $codigo = DB::select($query, ['codigo' => $codigo]);
        if ($codigo)
            return $codigo[0]->codigo;
        else
            return null;
    }
}
