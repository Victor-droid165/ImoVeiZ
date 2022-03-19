<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class EnderecoForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $estados = DB::table('estados')->get();
        $cidades = DB::table('cidades')->get();
        return view('components.endereco-form', compact(['estados', 'cidades']));
    }
}
