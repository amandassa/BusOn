<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Log extends Model
{
    public function acessoCliente($email, $date){
        $cliente_info = DB::select("SELECT cpf, nome FROM cliente WHERE email = ?;", [$email])[0];
        $cpf = $cliente_info->cpf;
        $nome = $cliente_info->nome;

        DB::insert("INSERT INTO logs (cpf_usuario, descricao, data_hora, tipo_usuario) 
        VALUES (?, 'Cliente ? entrou no site', ?, 'C');", [$cpf, $nome, $date]);
    }
}
