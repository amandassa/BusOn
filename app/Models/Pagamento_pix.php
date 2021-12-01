<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Pagamento_pix extends Model
{
    public static function criar($pix_pagador, $codigo_pagamento)
    {
       $confirmacao = DB::insert('INSERT INTO pagamento_pix (pix_pagador, codigo_pagamento) VALUES (?,?)', [$pix_pagador, $codigo_pagamento]);
        return $confirmacao;         
    }

    public static function buscarCodigo($pix_pagador, $codigo_pagamento)
    {
        $codigo = DB::select("SELECT codigo from pagamento_pix where pix_pagador = :pix and codigo_pagamento = :pagamento", ['pix' => $pix_pagador, 'pagamento' => $codigo_pagamento])[0]->codigo;
        return $codigo;

    }


}
