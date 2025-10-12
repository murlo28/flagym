<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensTreino extends Model
{
    protected $fillable = [
        'Treino_id',
        'Exercicio_id',
        'serie',
        'repeticao'
    ];

}
