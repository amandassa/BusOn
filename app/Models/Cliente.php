<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Cliente extends Authenticatable
{
    use Notifiable;

    protected $table = 'cliente';
    protected $primaryKey = 'cpf';
    protected $guard = 'cliente';


    protected $fillable = [
        'cpf',
        'nome',
        'email',
        'password',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthIdentifierName()

    {
        return 'cpf';
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getClienteByEmail($email){
        $cliente = DB::select("select * from cliente where email = ?", [$email]);
        if($cliente)
            return $cliente->first();
    }

    public static function getClientes(){
        $clientes = DB::select("SELECT * FROM cliente");
        return $clientes;
    }

    public static function index(){
        $emailLogado = Auth::guard('cliente')->user()->email;
        $usuario = DB::select("select * from cliente where email = ?", [$emailLogado])[0];
        $clienteCpf = $usuario->cpf;
        $clienteNome = $usuario->nome;
        $clienteEmail = $usuario->email;
        $clienteSenha = '';
        $confirmar = '';

        $cliente = [
            'cpf'=> $clienteCpf,
            'entradaNome' => $clienteNome,
            'entradaEmail'=> $clienteEmail,
            'entradaSenha' => $clienteSenha,
            'entradaConfirmarSenha' => $confirmar
        ];
        return $cliente;
    }


    public static function editar(Request $request){
        $emaillogado = Auth::guard('cliente')->user()->email;
        $usuario = DB::select("select * from cliente where email = ?", [$emaillogado])[0];
        
        $cpf = $usuario->CPF;
        $nome = $request['nome'];
        $email = $request['email'];
        $senha = $request['senha'];
        $confirmarSenha = $request['confirmarSenha'];

        if(empty($nome) or empty($email) or empty($senha) or empty($confirmarSenha)){
            return 1;
        }else{

            if($senha == $confirmarSenha){
                DB::update('UPDATE cliente set nome = ?, email = ?, password = ? where cpf = ?',
                [$nome, $email, Hash::make($senha), $cpf]);
                return 2;
            }
             else {
                return 3;
            }
        }
        
}
}
