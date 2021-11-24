<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Cliente extends Authenticatable
{
    use Notifiable;

    protected $table = 'cliente';
    protected $primaryKey = 'CPF';
    protected $guard = 'cliente';


    protected $fillable = [
        'CPF',
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
        return 'CPF';
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
        $clienteCpf = $usuario->CPF;
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
}
