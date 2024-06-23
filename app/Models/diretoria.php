<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diretoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_diretoria',
        'diretor_id',
        'diretor_id',
    ];

}
