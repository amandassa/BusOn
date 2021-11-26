<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    public static function criar($realizado, $forma_pagamento, $codigo_passagem){
        confirmacao = DB::insert("INSERT INTO pagamento (realizado, forma_pagamento, codigo_passagem) VALUES (?, ?, ?)", [$realizado, $forma_pagamento, $codigo_passagem]);
        return confirmacao;
    }
}
