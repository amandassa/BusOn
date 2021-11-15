<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passagem extends Model {

    protected $fillable = [
        'num_assento',
        'codigo_linha',
        'cpf_cliente',
        'data_compra'
    ];
}
