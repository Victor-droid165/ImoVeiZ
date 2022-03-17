<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Imovel
{
    use HasFactory;

    public $table = "casas";

    protected $fillable =
    [
        'area_construida',
        'area_terreno',
    ];

}
