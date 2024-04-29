<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;

    protected $fillable = [
       'user_id',
       'nome_da_vaga',
       'email',
       'nome',
       'telefone',
    ];


    public function vagas()
    {
        return $this->hasMany(Vaga::class);
    }
}
