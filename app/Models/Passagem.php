<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/*
Nome: Passagem (classe)
Funcionalidade: Representa a entidade passagem e as informações contidas na mesma
Autor(es): Israel Braitt 
*/
class Passagem extends Model {
    
    // atributos da classe
    private string $codigo_passagem;
    private int $codigo_linha;
    private string $cpf_comprador;
    private string $data_compra;
    private double $valor;

    // construtor da classe
    public function __construct(string $codigo_passagem, int $codigo_linha, string $cpf_comprador, string $data_compra, double $valor) {
        $this->codigo_passagem = $codigo_passagem;
        $this->codigo_linha = $codigo_linha;
        $this->cpf_comprador = $cpf_comprador;
        $this->data_compra = $data_compra;
        $this->valor = $valor;
    }
    
    // método de acesso ao atributo codigo_passagem
    public function getCodigo_passagem() {
        return this->$codigo_passagem;
    }
    
    // método de acesso ao atributo codigo_linha
    public function getCodigo_linha() {
        return $this->codigo_linha;
    }

    // método de acesso ao atributo cpf_comprador
    public function getCPF_comprador() {
        return $this->cpf_comprador;
    }

    // método de acesso ao atributo data_compra
    public function getData_compra() {
        return $this->data_compra;
    }

    // método de acesso ao atributo valor
    public function getValor() {
        return $this->valor;
    }

}
