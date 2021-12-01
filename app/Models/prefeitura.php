<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prefeitura extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'prefeitura_cod',
        'telefone',
        'habitantes'
    ];
}
