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

    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
    


}
