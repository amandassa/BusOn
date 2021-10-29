<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
// Use DB, use Request

class AdministradorModel extends Model
{
    // table, fillable =>
    /**
     * Criar novo funcionário.
     */

    public static function criarFuncionario($request){
        $nome = $request['nome'];
        $email = $request['email'];
        $cpf = str_replace(".", "", $request['cpf']);
        $cpf = str_replace("-", "", $cpf);
        $senha = $request['senha'];
        $confirmarSenha = $request['confirmacaoSenha'];
        if ($senha == $confirmarSenha) {
            DB::insert('insert into funcionario (nome, email, cpf, senha) values (?, ?, ?, ?)',
            [$nome, $email, $cpf, Hash::make($senha)]);
        }
    }

}
