<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_da_vaga',
        ' descricao',
        ' cidade',
            ' local'
    ];
}
