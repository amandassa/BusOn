<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trecho extends Model {

    // atributos
    protected $table = 'trecho';
    protected $primaryKey = 'codigo';
    protected string $cidade_origem;
    protected string $cidade_destino;
    protected int $codigo;
    protected float $preco;
    
    protected $fillable = [
        'cidade_partida', 
        'cidade_chegada', 
        'duracao', 
        'preco', 
        'ordem'
    ];

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
    public function setPreco(float $novo_preco) {
        $this->preco = $novo_preco;
    }

}
