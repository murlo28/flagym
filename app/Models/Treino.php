<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $fillable = [
        'id',
        'frequencia',
        'data',
        'status',
        'Funcionario_id',
        'Cliente_id'
    ];
}
