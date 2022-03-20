<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailContato extends Mailable
{
    use Queueable, SerializesModels;


    public $mensagem;
    public $nome;
    public $sobrenome;
    public $numero;
    public $email;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $mensagem, string $nome, string $sobrenome,
    string $numero, string $email)
    {
        $this->mensagem = $mensagem;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->numero = $numero;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
                    ->markdown('emails.contato.fromUser');
    }
}
