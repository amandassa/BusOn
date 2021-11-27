<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pagamento_cartao extends Model
{
    public static function criar($numero_cartao, $total_parcelas, $nome_titular, $data_validade, $ccv, $codigo_pagamento)
    {
        $confirmacao = DB::insert("INSERT INTO pagamento_cartao (numero_cartao, parcelas_pagas, total_parcelas, nome_titular, data_validade, ccv, codigo_pagamento) VALUES(?, 0, ?, ?, ?, ?, ?)", [$numero_cartao, $total_parcelas, $nome_titular, $data_validade, $ccv, $codigo_pagamento]);
        return $confirmacao;
    }
}
