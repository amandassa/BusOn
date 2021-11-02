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
}