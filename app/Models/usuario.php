<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    //colunas da tabela
    protected $fillable = ['login', 'senha', 'email', 'data_de_nascimento', 'genero', 'foto_de_perfil'];
}
