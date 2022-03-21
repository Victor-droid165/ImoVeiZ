<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayoutController extends Controller
{
    
    public function index()
    {
        $vendas =  DB::table('anuncios')->where('categoria', '=', 'Venda')->get();
        $alugueis =  DB::table('anuncios')->where('categoria', '=', 'Aluguel')->get();
        $tipos = [
          'apartamento',
          'casa',
          'fazenda',
          'terreno'  
        ];
        return view('Home.index', compact(['vendas', 'alugueis', 'tipos']));
    }

    public function contato(Request $request)
    {
        if($request->session()->has('errors')){
            $errors = $request->session()->get('errors');
            $nome_invalido = $errors->has('nome');
            $sobrenome_invalido = $errors->has('sobrenome');
            $telefone_invalido = $errors->has('numero');
            $email_invalido = $errors->has('email');
            $mensagem_invalida = $errors->has('mensagem');
            $erros = $errors->getBags()['default']->getMessages();
        } else{
            $nome_invalido = $sobrenome_invalido = $telefone_invalido = $email_invalido = 
            $mensagem_invalida = $erros = true;
        }
        
        $mensagem = $request->session()->get(key: 'mensagem');
        if($erros)
            return view('Contato.index', compact(['mensagem', 'nome_invalido', 'sobrenome_invalido'
            , 'telefone_invalido', 'email_invalido', 'mensagem_invalida', 'erros']));

        return view('Contato.index', compact(['mensagem', 'nome_invalido', 'sobrenome_invalido'
            , 'telefone_invalido', 'email_invalido', 'mensagem_invalida']));
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
