<?php
 
namespace App\Http\Controllers;
 
use App\Mail\SendEmailContato;
use App\Http\Requests\ContatoFormRequest;
use Illuminate\Support\Facades\Mail;
 
class ContatoController extends Controller
{
    /**
     * Ship the given order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContatoFormRequest $request)
    {
        $nome = $request->nome;
        $mensagem = $request->mensagem;
        $sobrenome = $request->sobrenome;
        $numero = $request->numero;
        $email = $request->email;
 
        // Ship the order...
        Mail::to(config('mail.from.address'))->send(
            new SendEmailContato($mensagem, $nome, $sobrenome, $numero, $email)
        );
        $request->session()
        ->flash(
            'mensagem',
            "E-mail enviado com sucesso! Entraremos em contato o mais rápido possível"
        );
        return redirect()->route( route: 'contato');
    }
}