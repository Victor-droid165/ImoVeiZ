<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $role_corretor_id = DB::table('roles')->select('id')->where('name', '=', 'corretor')->first()->id;
        $corretores_ids =  DB::table('model_has_roles')->where('role_id', '=', $role_corretor_id)
                                                   ->select('model_id')->get();
        $corretores_ids_array = [];
        foreach($corretores_ids as $corretor_id)
            array_push($corretores_ids_array, $corretor_id->model_id);
        $corretores = DB::table('users')->whereIn('id', $corretores_ids_array)->get();
        $cont = 0;
        return view('Corretores.index', compact('corretores', 'cont'));
    }

    public function usuarios()
    {
        $users =  DB::table('users')->where('id', '<>', Auth::user()->id)->get();
        return view('Usuarios.index', compact('users'));
    }
}
