<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'password',
        'remember_token',
    ];
    
<<<<<<< HEAD
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
=======
    // construtor da classe
    public function __construct(string $nome, string $email, string $cpf, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
    }

>>>>>>> 6e651ac82ec04664fafa69f09ccd04f9dd5bf7c1
    
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
}