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
        $is_admin = null;
        if (isset($_POST['is_admin'])) {
            $is_admin = '1';
        } else {
            $is_admin = '0';
        }
        $confirmarSenha = $request['confirmacaoSenha'];
        if ($senha == $confirmarSenha) {
            DB::insert('insert into funcionario (nome, email, cpf, senha, is_admin) values (?, ?, ?, ?, ?)',
            [$nome, $email, $cpf, Hash::make($senha), $is_admin]);
        }
    }

    public static function editarPerfilAdm(Request $request){
        
        $nome = $request['entradaNome'];
        $email = $request['entradaEmail'];
        $cpf = $request['cpf'];
        $senha = $request['entradaSenha'];
        $confirmarSenha = $request['entradaConfirmarSenha'];
        if($senha== $confirmarSenha){
            return DB::update('UPDATE funcionario nome set ?, email set ?, senha set ? where cpf = ?', 
            [$nome, $email, Hash::make($senha), $cpf]);
        }
        
    }

}
