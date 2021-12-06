<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Pagamento_boleto extends Model
{
    public static function criar($codigo_barras, $nome, $cpf, $codigo_pagamento)
    {
       $confirmacao = DB::insert('INSERT INTO pagamento_boleto (codigo_barras, nome, cpf, codigo_pagamento) VALUES (?,?,?,?)', [$codigo_barras, $nome, $cpf, $codigo_pagamento]);
        return $confirmacao;         
    }
    
    public static function codigoBarrasDisponivel($codigo_barras)
    {
        $query = "SELECT codigo_barras FROM pagamento_boleto";
        $codigos = DB::select($query);
        foreach ($codigos as $codigo)
        {
            if($codigo_barras == $codigo->codigo_barras) 
                return false;
        }
        return true;

    }

}
