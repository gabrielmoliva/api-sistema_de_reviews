<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    //colunas
    protected $fillable = ['texto', 'rating', 'nota', 'id_review', 'usuario_login', 'obra_id', 'admin_login'];
}
