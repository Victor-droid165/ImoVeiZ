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
    public function index(Request $request)
    {
        $anuncios2 = $valor_min = $valor_max = $anuncios_id = false;
        if($request->has('valor_min')){
            $valor_min = $request->get('valor_min');
            $valor_max = $request->get('valor_max');
            $anuncios_id = DB::table('imoveis')->whereBetween('valor', [$valor_min, $valor_max]);
            $request->query->remove('valor_min');
            $request->query->remove('valor_max');
        }

        if($request->has('tipo')){
            $imoveis_id = DB::table($request->get('tipo').'s')->select('base_id')->get();
            $ids = [];
            foreach ($imoveis_id as $imovel_id)
                array_push($ids, $imovel_id->base_id);
            if($anuncios_id)
                $anuncios_id = $anuncios_id->whereIn('id', $ids);
            else
                $anuncios_id = DB::table('imoveis')->whereIn('id', $ids);
            $request->query->remove('tipo');
        }

        if($anuncios_id){
            $anuncios_id = $anuncios_id->select('anuncio_id')->get();
            $ids = [];
            foreach ($anuncios_id as $anuncio_id)
                array_push($ids, $anuncio_id->anuncio_id);
            $anuncios2 = DB::table('anuncios')->whereIn('id', $ids);
        }
        
        $keys = [];
        foreach($request->all() as $key=>$valor){
            $operador = '=';
            if($key == 'categoria')
                $valor = ucfirst($valor);
            else if($key == 'valor')
                $operador = '>=';
            array_push($keys, [$key, $operador, $valor]);
        }
        
        if ($anuncios2)
            $anuncios = $anuncios2->where($keys)->get();
        else
            $anuncios = DB::table('anuncios')->where($keys)->get();
            
        return view('Anuncios.index', compact('anuncios'));
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
        $classe = $anuncio->imovel::class;
        $tipo = explode('\\',$classe);
        $tipo = array_pop($tipo);
        $imovel = $anuncio->imovel;
        $endereco = $anuncio->imovel->endereco;
        return view('Anuncios.info', compact([
            'anuncio',
            'imovel',
            'endereco',
            'tipo'
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
