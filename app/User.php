<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /**
     * use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     
    public $table = 'cliente';
    protected $fillable = [
        'cpf', 'nome', 'email', 'senha',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
      return $this->senha;
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    */
}
