<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    protected $fillable = [
        'id',
        'valor',
        'mesReferencia',
        'dataRecebimento',
        'metodoRecebimento',
        'status',
        'Matricula_id'
    ];
}
