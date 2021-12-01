<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class atividades extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'horario_previsto',
        'receptividade',
        'obs',
        'pendencias',
        'status',
        'atividades_cod',
        'contatos_prefeitura_id'
    ];
}
