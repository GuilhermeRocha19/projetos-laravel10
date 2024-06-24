<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    use HasFactory;

    //Indicar o nome da tabela
    protected $table = 'situacao';

    //Indicar quais colunas podem ser cadastradas
    protected $fillable = ['nome','cor'];

    public function conta()
    {
        return $this->hasMany(Conta::class);
    }
}
