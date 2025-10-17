<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    protected $fillable = [
        'valor',
        'mesReferencia',
        'dataRecebimento',
        'metodoRecebimento',
        'status',
        'Matricula_id'
    ];
}
