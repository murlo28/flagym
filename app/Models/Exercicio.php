<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
     protected $fillable = [
        'nome',
        'Grupo_Muscular',
        'gif',
        'status'
    ];
}
