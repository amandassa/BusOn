<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrechosLinha extends Model
{
    protected $table = 'trechos_linha';
    
    protected $fillable = [
        'direta',         
        'total_vagas'
    ];
}
