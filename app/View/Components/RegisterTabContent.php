<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class RegisterTabContent extends Component
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
        $role_admin_id = DB::table('roles')->where('name', '=', 'admin')->first()->id;
        $has_admin = DB::table('model_has_roles')->where('role_id','=', $role_admin_id)->first();
        $role = '';
        return view('components.register-tab-content', compact('has_admin', 'role'));
    }
}
