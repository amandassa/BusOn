<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use app\Models\Trecho;

/*
Nome: Linha (classe)
Funcionalidade: Representa a entidade linha e as informações contidas na mesma
Autor(es): Israel Braitt 
*/
class Linha extends Model {

    // atributos
    private array $trechos;
    private string $tipo;
    private string $cidade_origem;
    private string $cidade_destino;
    private int $codigo;
    private int $vagas;
    private float $preco;

    // constutor da classe
    public function __construct(string $tipo, string $cidade_origem, string $cidade_destino, int $codigo, int $vagas, float $preco) {
        $this->trechos = pesquisaListaTrechosLinha();
        $this->tipo = $tipo;
        $this->cidade_origem = $cidade_origem;
        $this->cidade_destino = $cidade_destino;
        $this->codigo = $codigo;
        $this->vagas = $vagas;
        $this->preco = $preco;
    }

    // método de acesso ao atributo trechos
    public function getTrechos() {
        return $this->trechos;
    }

    // método de alteração do atributo trechos
    public function setTrechos(array $novo_trechos) {
        $this->trechos = $novo_trechos;
    }

    // método de acesso ao atributo tipo
    public function getTipo() {
        return $this->tipo;
    }

    // método de alteração do atributo tipo
    public function setTipo(string $novo_tipo) {
        $this->tipo = $novo_tipo;
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

    // método de acesso ao atributo vagas
    public function getVagas() {
        return $this->vagas;
    }

    // método de alteração do atributo vagas
    public function setVagas(int $novo_vagas) {
        $this->vagas = $novo_vagas;
    }

    // método de acesso ao atributo preco
    public function getPreco() {
        return $this->preco;
    }

    // método de alteração do atributo preco
    public function setPreco(double $novo_preco) {
        $this->preco = $novo_preco;
    }

    //  método que retorna um array com os trechos de uma linha
    public function pesquisaListaTrechosLinha() {
        // obs: o retorno deve ser um array de objetos Trecho
    }

}
