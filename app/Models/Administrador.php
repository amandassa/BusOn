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
            DB::insert('insert into funcionario (nome, email, cpf, password, is_admin) values (?, ?, ?, ?, ?)',
            [$nome, $email, $cpf, Hash::make($senha), $is_admin]);
        }
    }

    public static function index(){ 

        $emaillogado = Auth::guard('funcionario')->user()->email;
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];
        $Cpf =$usuario->CPF;
        $admCpf = substr($Cpf, 0, 3) . '.' . substr($Cpf, 3, 3) . '.' . substr($Cpf, 6, 3) . '-' . substr($Cpf, 9);
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

    public static function perfilFunc($email){ 
        $emaillogado = $email;
        $usuario = DB::select("select * from funcionario where email = ?", [$emaillogado])[0];
        $fCpf = $usuario -> CPF;
        $funCPf = substr($fCpf, 0, 3) . '.' . substr($fCpf, 3, 3) . '.' . substr($fCpf, 6, 3) . '-' . substr($fCpf, 9);
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
        $matricula =$request['matricula'];
        $usuario = DB::select("select * from funcionario where matricula = ?", [$matricula])[0];
        $cpf = $usuario->CPF;
        $nome = $request['nome'];
        $matricula = $usuario->matricula;
        $email = $request['email'];
        $senha = $request['senha'];
        $confirmarSenha = $request['confirmarSenha'];

        if(empty($nome) or empty($email) or empty($senha) or empty($confirmarSenha)){
                $usu = [
                    'id' => '1',
                    'email' => $email
                ];
                return $usu;
        }else{
            if($senha == $confirmarSenha){
                DB::update('UPDATE funcionario set nome = ?, email = ?, password = ? where cpf = ?',
                [$nome, $email, $senha, $cpf]);
                $usu = [
                    'id' => '2',
                    'email' => $email
                ];
                return $usu;
                
            }else {
                $usu = [
                    'id' => '3',
                    'email' => $email
                ];
                return $usu;
            }
        }
        
}

    

    


   

}
