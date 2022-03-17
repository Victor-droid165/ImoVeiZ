<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terreno extends Imovel
{
    use HasFactory;

    public $table = "terrenos";

    protected $fillable =
    [
        'frente',
        'lado',
        'agua',
        'luz'
    ];

}
