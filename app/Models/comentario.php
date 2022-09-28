<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentario';
    
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'comentario',
    ];
}
