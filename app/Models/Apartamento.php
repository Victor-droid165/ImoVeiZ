<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamento extends Imovel
{
    use HasFactory;

    public $table = "apartamentos";

    protected $fillable =
    [
        'andar',
        'nome_predio',
        'caracteristicas_predio'
    ];

}
