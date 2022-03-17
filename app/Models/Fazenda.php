<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fazenda extends Imovel
{
    use HasFactory;

    public $table = "fazendas";

    protected $fillable =
    [
        'casa',
        'plantacoes',
        'animais'
    ];

}
