<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comenta extends Model
{
    use HasFactory;

    //colunas da tabela
    protected $fillable = ['review_id', 'usuario_login', 'comentario'];
}
