<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $fillable = [
        'frequencia',
        'data',
        'status',
        'funcionario_id',
        'cliente_id'
    ];
}
