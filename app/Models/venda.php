<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendedor_id',
        'valor_venda',
        'diretoria_id',
        'unidade_id',
        'local',
        'status',
    ];

    public function vendedor()
    {
        return $this->belongsTo(User::class, 'vendedor_id');
    }

    public function diretoria()
    {
        return $this->belongsTo(diretoria::class, 'diretoria_id');
    }

    public function unidade()
    {
        return $this->belongsTo(unidade::class, 'unidade_id');
    }
}
