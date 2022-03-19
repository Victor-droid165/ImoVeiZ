<?php

namespace App\Http\Controllers;

use App\Models\Anuncio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\AnunciosFormRequest;
use App\Services\CriadorDeImovel;
use App\Services\CriadorDeAnuncio;
use Illuminate\Support\Facades\DB;


class AnuncioController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = [
            'Apartamento',
            'Casa',
            'Terreno',
            'Fazenda'
        ];

        $categorias = [
            'Venda',
            'Aluguel'
        ];
        
        return view('Anuncios.create', compact(['tipos', 'categorias']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnunciosFormRequest $request,
    CriadorDeAnuncio $criadorDeAnuncio)
    {
        $anuncio = $criadorDeAnuncio->criarAnuncio(
            $request,
            Auth::User()
        );

        $request->session()
        ->flash(
            'mensagem',
            "Anúncio do imóvel criado com sucesso"
        );
        return redirect()->route( route: 'home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio)
    {
        $is_apartamento = $anuncio->imovel::class == "App\Models\Apartamento";
        $is_fazenda = $anuncio->imovel::class == "App\Models\Fazenda";
        $is_terreno = $anuncio->imovel::class == "App\Models\Terreno";
        $is_casa = $anuncio->imovel::class == "App\Models\Casa";
        return view('Anuncios.info', compact([
            'anuncio', 
            'is_apartamento', 
            'is_fazenda', 
            'is_terreno',
            'is_casa'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Anuncio $anuncio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anuncio $anuncio)
    {
        //
    }
}
