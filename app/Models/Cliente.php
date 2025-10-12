<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
     protected $fillable = [
        'id',
        'nome_completo',
        'CPF',
        'data_nascimento',
        'genero',
        'telefone',
        'email',
        'endereco',
        'status',
        'data_cadastro',
        'restricao_fisica',
        'login',
        'senha'
    ];

}
