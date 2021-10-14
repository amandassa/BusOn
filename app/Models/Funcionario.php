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
    private string $senha;
    private int $matricula;

    protected $table = 'funcionario';
    public $timestamps = false;
    
    public function getAuthPassword(){
        return $this->senha;
    }
    
    public function setPasswordAttribute($value)
    {
        $this->attributes['senha'] = bcrypt($value);
    }
    
    protected $fillable = [
        'CPF',
        'nome',
        'email',
        'senha',
        'matricula',
    ];

    // construtor da classe
    public function __construct(string $nome, string $email, string $cpf, string $senha, int $matricula) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->matricula = $matricula;
    }

    // método de alteração do atributo nome
    public function setNome(string $novo_nome) {
        $this->nome = $novo_nome;
    }

    // método de acesso ao atributo email
    public function getEmail() {
        return $this->email;
    }

    // método de alteração do atributo email
    public function setEmail(string $novo_email) {
        $this->email = $novo_email;
    }

    // método de acesso ao atributo cpf
    public function getCPF() {
        return $this->cpf;
    }

    // método de alteração do atributo cpf
    public function setCPF(string $novo_cpf) {
        $this->cpf = $novo_cpf;
    }

    // método de alteração do atributo senha
    public function setSenha(string $nova_senha) {
        $this->senha = $nova_senha;
    }

    // método de acesso ao atributo matricula
    public function getMatricula() {
        return $this->matricula;
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