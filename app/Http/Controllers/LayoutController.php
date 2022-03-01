<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    
    public function index()
    {
        return view('Home.index');
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
