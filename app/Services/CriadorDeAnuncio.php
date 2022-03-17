<?php

namespace App\Services;

use App\Http\Requests\AnunciosFormRequest;
use App\Models\Anuncio;
use App\Models\Categoria;
use App\Models\Imovel;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CriadorDeAnuncio{
    public function criarAnuncio(AnunciosFormRequest $request, User $anunciante) : Anuncio{
        $anuncio = new Anuncio();
        $titulo = $request->titulo;
        $descricao = $request->descricao;
        $categoria = $request->categoria;
        $tipo = $request->tipo;
        $criadorDeImovel = new CriadorDeImovel();
        $rua = $request->rua;
        $numero_rua = $request->numero_rua;
        $bairro = $request->bairro;
        $cep = $request->cep;
        $cidade = $request->cidade;
        $estado = $request->estado;
        DB::transaction( function () use ($titulo, $descricao, $categoria, $tipo,
        $anunciante, $rua, $numero_rua, $bairro, $cep, $cidade, $estado,
        $criadorDeImovel, $request,  &$anuncio){
            $anuncio = $anunciante->anuncios()->create([
                'titulo' => $titulo,
                'descricao' => $descricao
            ]);
            $imovel = $criadorDeImovel->createTipoImovel($tipo, $request->except('tipo'), $anuncio);
            $endereco = $imovel->endereco()->create([
                'rua' => $rua,
                'numero' => $numero_rua,
                'bairro' => $bairro,
                'cep' => $cep,
                'cidade' => $cidade,
                'estado' => $estado
            ]);
            $categoria = $anuncio->categoria()->create([
                'nome' => $categoria,
                'descricao' => $categoria . " de Imóveis",
            ]);
        });
        return $anuncio;
    }
}