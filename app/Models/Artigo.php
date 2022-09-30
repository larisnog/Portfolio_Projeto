<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigo';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'autor',
        'conteudo',
        'imagem_red',
    ];
}
