<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;

    protected $table = "anuncios";

    protected $fillable = [
        'titulo',
        'descricao',
    ];

    public function autor(){
        return $this->belongsTo(User::class, 'anuncio_id', 'id');
    }

    public function categoria(){
        return $this->hasOne(Categoria::class, 'anuncio_id', 'id');
    }

    public function imovel(){
        return $this->hasOne(Imovel::class, 'anuncio_id', 'id');
    }

}
