<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class FiltrosModalForm extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $estados = DB::table('estados')->get();
        $cont = 0;
        $tipos = ['apartamento',
        'casa', 'fazenda', 'terreno'];
        return view('components.filtros-modal-form', compact('estados', 'cont', 'tipos'));
    }
}
