<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsPagamento_cartao extends Model
{
    public static function criar($numero_cartao, $total_parcelas, $nome_titular, $data_validade, $ccv, $codigo_pagamento)
    {
        $confirmacao = DB::insert("INSERT INTO pagamento_cartao VALUES(?, 0, ?, ?, ?, ?, ?)", [$numero_catao, $total_parcelas, $nome_titular, $data_validade, $ccv, $codigo_pagamento]);
        return $confirmacao;
    }
}
