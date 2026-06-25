<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Model Mensagem
    |--------------------------------------------------------------------------
    | Este Model representa a tabela "mensagens" no banco de dados.
    */

    protected $table = 'mensagens';

    protected $fillable = [
        'nome',
        'email',
        'assunto',
        'mensagem',
    ];
}