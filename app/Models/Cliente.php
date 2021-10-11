<?php

use ClienteDAO;

/*
Nome: Cliente (classe)
Funcionalidade: Representa a entidade cliente e as ações executadas pela mesma
Autor(es): Israel Braitt 
*/
class Cliente {

    // atributos
    private string $nome;
    private string $email;
    private string $cpf;
    private string $senha;
    
    // construtor da classe
    public function __construct(string $nome, string $email, string $cpf, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->senha = $senha;
    }

    // método de acesso ao atributo nome
    public function getNome() {
        return $this->nome;
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
    
    /*
    Nome: cadastrar (método)
    Funcionalidade: Cadastrar um novo cliente no sistema
    Autor(es): Israel Braitt
    */
    public function cadastrar(string $nome, string $email, string $cpf, string $senha) {
        ClienteDAO::create();
    }

    /*
    Nome: login (método)
    Funcionalidade: Efetuar o login do cliente no sistema
    Autor(es): Israel Braitt
    */
    public function login() {

    }

    /*
    Nome: logout (método)
    Funcionalidade: Desconectar o cliente do sistema
    Autor(es): Israel Braitt
    */
    public function logout() {

    }

    /*
    Nome: comprarPassagem (método)
    Funcionalidade: Permitir o cliente fazer a compra direta de uma passagem
    Autor(es): Israel Braitt
    */
    public function comprarPassagem() {

    }

    /*
    Nome: comsultarLinhas (método)
    Funcionalidade: Consultar as linhas disponíveis para viagem
    Autor(es): Israel Braitt
    */
    public function consultarLinhas() {

    }

    /*
    Nome: alterarDados (método)
    Funcionalidade: Alterar os dados (que podem ser alterados) do cliente
    Autor(es): Israel Braitt
    */
    public function alterarDados(string $novo_nome, string $novo_email, string $nova_senha) {

    }

    /*
    Nome: minhasPassagens (método)
    Funcionalidade: Listar as passgens compradas por um cliente
    Autor(es): Israel Braitt
    */
    public function minhasPassagens() {

    }
}
?>