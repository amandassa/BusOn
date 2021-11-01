<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
        'matricula',
        'is_admin',
    ];

    public $timestamps = false;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*public function getAuthPassword(){
        return $this->password;
    }
    */

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

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
