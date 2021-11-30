<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pagamento extends Model
{
    public static function criar($realizado, $forma_pagamento, $codigo_passagem){
        $confirmacao = DB::insert("INSERT INTO pagamento (realizado, forma_pagamento, codigo_passagem) VALUES (?, ?, ?)", [$realizado, $forma_pagamento, $codigo_passagem]);
        return $confirmacao;
    }

    public static function getCodigo($parametro, $codigo){
        $query = "SELECT codigo FROM pagamento WHERE ".$parametro." = :codigo";
        $codigo = DB::select($query, ['codigo' => $codigo]);
        if ($codigo)
            return $codigo[0]->codigo;
        else
            return null;
    }

    public static function criarBoleto($codigo_barras, $nome, $cpf, $codigo_pagamento){
       $confirmacao = DB::insert('INSERT INTO pagamento_boleto (codigo_barras, nome, cpf, codigo_pagamento) VALUES (?,?,?,?)', [$codigo_barras, $nome, $cpf, $codigo_pagamento]);
       return $confirmacao;
    }
}
