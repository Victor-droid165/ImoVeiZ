<?php

namespace App\Services;

use App\Http\Requests\AnunciosFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Imovel;
use App\Models\User;
use App\Models\Casa;
use App\Models\Fazenda;
use App\Models\Apartamento;
use App\Models\Terreno;
use Illuminate\Support\Facades\DB;

class CriadorDeImovel{

    public function createTipoImovel(string $tipo, $inputs, Anuncio $anuncio) : Imovel{
        if($tipo == "Apartamento"){
            $apartamento = new Apartamento([
                'valor' => $inputs['output'],
                'anuncio_id' => $anuncio->id,
                'andar' => $inputs['andar'],
                'nome_predio' => $inputs['nome_predio'],
                'caracteristicas_predio' => $inputs['caracteristicas_predio'],
            ]);
            $apartamento->save();
            return $apartamento;
        }
        if($tipo == "Casa"){
            $casa = new Casa([
                'valor' => $inputs['output'],
                'anuncio_id' => $anuncio->id,
                'area_construida' => $inputs['area_construida'],
                'area_terreno' => $inputs['area_terreno'],
            ]);
            $casa->save();
            return $casa;
        }
        if($tipo == "Fazenda"){
            $fazenda = new Fazenda([
                'valor' => $inputs['output'],
                'anuncio_id' => $anuncio->id,
                'casa' => $inputs['casa'],
                'plantacoes' => $inputs['plantacoes'],
                'animais' => $inputs['animais'],
            ]);
            $fazenda->save();
            return $fazenda;
        }
        if($tipo == "Terreno"){
            $terreno = new Terreno([
                'valor' => $inputs['output'],
                'anuncio_id' => $anuncio->id,
                'frente' => $inputs['frente'],
                'lado' => $inputs['lado'],
                'agua' => $inputs['agua'],
                'luz' => $inputs['luz'],
            ]);
            $terreno->save();
            return $terreno;
        }
    }
}