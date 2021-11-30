<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Log extends Model
{
    public function acessoCliente($cpf, $nome, $date){ 
        DB::insert("INSERT INTO logs (cpf_usuario, descricao, data_hora, tipo_usuario) 
        VALUES (?, 'Cliente ? entrou no site', ?, 'C');", [$cpf, $nome, $date]);
    }
}
