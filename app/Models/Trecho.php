<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
Nome: Trecho (classe)
Funcionalidade: Representa a entidade trecho e as informações contidas na mesma
Autor(es): Israel Braitt 
*/
class Trecho extends Model {

    // atributos
    private string $cidade_origem;
    private string $cidade_destino;
    private int $codigo;
    private double $preco;

    // constutor da classe
    public function __construct(string $cidade_origem, string $cidade_destino, int $codigo, int $vagas, float $preco) {
        $this->cidade_origem = $cidade_origem;
        $this->cidade_destino = $cidade_destino;
        $this->codigo = $codigo;
        $this->vagas = $vagas;
        $this->preco = $preco;
    }

    // método de acesso ao atributo cidade_origem
    public function getCidade_origem() {
        return $this->cidade_origem;
    }

    // método de alteração do atributo cidade_origem
    public function setCidade_origem(string $nova_cidade_origem) {
        $this->cidade_origem = $nova_cidade_origem;
    }

    // método de acesso ao atributo cidade_destino
    public function getCidade_destino() {
        return $this->cidade_destino;
    }

    // método de alteração do atributo cidade_destino
    public function setCidade_destino(string $nova_cidade_destino) {
        $this->cidade_destino = $nova_cidade_destino;
    }

    // método de acesso ao atributo codigo
    public function getCodigo() {
        return $this->codigo;
    }

    // método de alteração do atributo codigo
    public function setCodigo(string $novo_codigo) {
        $this->codigo = $novo_codigo;
    }

    // método de acesso ao atributo preco
    public function getPreco() {
        return $this->preco;
    }

    // método de alteração do atributo preco
    public function setPreco(double $novo_preco) {
        $this->preco = $novo_preco;
    }

}
