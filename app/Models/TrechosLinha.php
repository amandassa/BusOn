<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrechosLinha extends Model
{
    protected $table = 'trechos_linha';
    
    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
}
