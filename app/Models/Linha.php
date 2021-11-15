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

    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
    


}
