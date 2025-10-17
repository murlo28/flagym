<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = [
        'data_matricula',
        'diavencimento',
        'valormensalidade',
        'status',
        'Cliente_id'
    ];
}
