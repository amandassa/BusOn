<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
/*
Nome: Funcionario (classe)
Funcionalidade: Representa a entidade funcionário e as ações executadas pela mesma
Autor(es): Israel Braitt
*/
class Funcionario extends Authenticatable {

    use notifiable;
    // atributos
    private string $nome;
    private string $email;
    private string $cpf;
    private string $password;
    private int $matricula;

    protected $table = 'funcionario';
    protected $primaryKey = 'matricula';
    protected $guard = 'funcionario';

    protected $fillable = [
        'nome',
        'email',
        'CPF',
        'password',       
        'is_admin',
    ];

    public $timestamps = false;

    protected $hidden = [        
        'remember_token',
    ];



    public static function index(){ 
        $cpflogado = Auth::guard('funcionario')->user()->CPF;
        $usuario = DB::select("select * from funcionario where CPF = ?", [$cpflogado])[0];


        $funCpf = $usuario->CPF;
        $funNome = $usuario->nome;
        $funEmail = $usuario->email;
        $funMatricula = $usuario->matricula;
        $funSenha = '';
        $confirmar = '';


        $funcionario = [
            'cpf'=> $funCpf,
            'entradaNome' => $funNome,
            'entradaEmail'=> $funEmail,
            'entradaMatricula' => $funMatricula,
            'entradaSenha' => $funSenha,
            'entradaConfirmarSenha' => $confirmar       
         ];

        return $funcionario;
              
    }

    public static function editar(Request $request){
            
            $cpflogado = (Auth::guard('funcionario')->user()->CPF);
            $usuario = DB::select("select * from funcionario where CPF = ?", [$cpflogado])[0];
            
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

    /*public function getAuthPassword(){
        return $this->password;
    }
    */
    

    /*
    Nome: login (método)
    Funcionalidade: Efetuar o login do funcionário no sistema
    Autor(es): Israel Braitt
    */
    public function login() {

    }

    /*
    Nome: logout (método)
    Funcionalidade: Desconectar o funcionário do sistema
    Autor(es): Israel Braitt
    */
    public function logout() {

    }

    /*
    Nome: alterarDados (método)
    Funcionalidade: Alterar os dados (que podem ser alterados) do funcionário
    Autor(es): Israel Braitt
    */
    public function alterarDados(string $novo_nome, string $novo_email, string $nova_senha) {

    }

    /*
    Nome: venderPassagem (método)
    Funcionalidade: Vender passagem para um cliente
    Autor(es): Israel Braitt
    */
    public function venderPassagem() {

    }

    /*
    Nome: consultarLinhas (método)
    Funcionalidade: Consultar as linhas disponíveis para viagem
    Autor(es): Israel Braitt
    */
    public function consultarLinhas() {

    }

    /*
    Nome: mudarAgenda (método)
    Funcionalidade: Fazer alterações nas agendas dos trechos das linhas
    Autor(es): Israel Braitt
    */
    public function mudarAgenda() {

    }

    /*
    Nome: alterarTrecho (método)
    Funcionalidade: Fazer alterações em determinado trecho
    Autor(es): Israel Braitt
    */
    public function alterarTrecho() {

    }
}

?>
