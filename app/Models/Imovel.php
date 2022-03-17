<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cvsouth\EloquentInheritance\InheritableModel;

class Imovel extends InheritableModel
{
    use HasFactory;

    public $table = "imoveis";
    
    protected $fillable = [
        'valor',
        'anuncio_id'
    ];

    public function anuncio(){
        return $this->belongsTo(Anuncio::class, 'imovel_id', 'id');
    }

    public function endereco(){
        return $this->hasOne(Endereco::class, 'imovel_id', 'id');
    }
}
