<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    
    public function index()
    {
        $anuncios = DB::table('anuncios')->get();
        return view('Home.index', compact('anuncios'));
    }

    public function contato()
    {
        return view('Contato.index');
    }

    public function quemSomos()
    {
        $nomes = [
            'Lorena Albuquerque',
            'Pedro Lôbo',
            'Victor Emanuel'
        ];
        return view('Quem-Somos.index', compact('nomes'));
    }

    public function corretores()
    {
        return view('Corretores.index');
    }
}
