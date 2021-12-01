<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contatosPrefeitura extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'termino_mandato',
        'tipo_contato',
        'prefeituras_id'
    ];
}
