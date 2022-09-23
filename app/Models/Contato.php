<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';
    
    protected $fillable = [
        'nome',
        'email',
        'mensagem',
    ];
}
