<?php

namespace App\Models;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
// Use DB, use Request

class Administrador extends Model
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

    public static function index(){ 

        $emaillogado = Auth::guard('funcionario')->user()->email;
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];

        $admCpf = $usuario->CPF;
        $admNome = $usuario->nome;
        $admEmail = $usuario->email;
        $admMatricula = $usuario->matricula;
        $admSenha = '';
        $confirmar = '';


        $administrador = [
            'cpf'=> $admCpf,
            'entradaNome' => $admNome,
            'entradaEmail'=> $admEmail,
            'entradaMatricula' => $admMatricula,
            'entradaSenha' => $admSenha,
            'entradaConfirmarSenha' => $confirmar       
         ];

        return $administrador;
              
    }

    public static function editar(Request $request){
            $emaillogado = Auth::guard('funcionario')->user()->email;
            $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];
            
            $cpf = $usuario->CPF;
            $nome = $request['nome'];
            $matricula = $usuario->matricula;
            $email = $request['email'];
            $senha = $request['senha'];
            $confirmarSenha = $request['confirmarSenha'];
            if(empty($nome) or empty($email) or empty($senha) or empty($confirmarSenha)){
                return 1;
            }else{

                if($senha == $confirmarSenha){
                    DB::update('UPDATE funcionario set nome = ?, email = ?, password = ? where cpf = ?',
                    [$nome, $email, $senha, $cpf]);
                    return 2;
                }
                 else {
                    return 3;
                }
            }
            
    }

    public static function perfilFunc(){ 

        $emaillogado = 'bazevedo@terra.com.br';
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];

        $funCPf = $usuario->CPF;
        $funNome = $usuario->nome;
        $funEmail = $usuario->email;
        $funMatricula = $usuario->matricula;
        $funSenha = '';
        $confirmar = '';


        $funcionario = [
            'cpf'=> $funCPf,
            'entradaNome' => $funNome,
            'entradaEmail'=> $funEmail,
            'entradaMatricula' => $funMatricula,
            'entradaSenha' => $funSenha,
            'entradaConfirmarSenha' => $confirmar       
         ];

        return $funcionario;
              
    }

    public static function editarFunc(Request $request){
        $emaillogado ='bazevedo@terra.com.br';
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];
        
        $cpf = $usuario->CPF;
        $nome = $request['nome'];
        $matricula = $usuario->matricula;
        $email = $request['email'];
        $senha = $request['senha'];
        $confirmarSenha = $request['confirmarSenha'];

        if(empty($nome) or empty($email) or empty($senha) or empty($confirmarSenha)){
                return 1;
        }else{
            if($senha == $confirmarSenha){
                DB::update('UPDATE funcionario set nome = ?, email = ?, password = ? where cpf = ?',
                [$nome, $email, $senha, $cpf]);
                return 2;
            }else {
                return 3;
            }
        }
        
}

    

    


   

}
