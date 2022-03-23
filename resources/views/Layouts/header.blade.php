@php
    $routeName = Route::current()->getName(); 
@endphp
<header>
    <div class="sticky-top myHeaderNav">
        <nav class="navbar navbar-expand-lg mb-auto navbar-light bg-light">
            <div class="container-fluid">
                <a name = "a-logo" class="navbar-brand ms-3 mt-2 mt-lg-0" href="{{route('home')}}">
                    <x-application-side-logo/>
                    ImoVeiZ
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarToggler"
                    aria-controls="navbarToggler"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                        <li class="nav-item px-3">
                            <a class="nav-link {{ $routeName ==
                                'quem-somos' ? 'active' : ''  }}"
                            aria-current="page" href="{{route('quem-somos')}}"
                            >Quem Somos</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link {{ $routeName ==
                                'corretores' ? 'active' : ''  }}" href="{{route('corretores')}}">Corretores</a>
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-link {{ $routeName ==
                                'contato' ? 'active' : ''  }}" href="{{route('contato')}}">Contato</a>
                        </li>
                    </ul>
                    @guest
                        <div class="d-flex align-items-center">
                            <a href="{{route('login')}}" class="btn btn-outline-primary px-3 me-2"
                            role="button" data-bs-toggle="modal" data-bs-target="#modalLogin">Login</a>
                            @extends('components.login-modal')
                        </div>
                    @endguest
                    @auth
                        <div class="hidden sm:flex sm:items-center sm:ml-6 me-3">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-500
                                    hover:text-gray-700 hover:border-gray-300 focus:outline-none
                                    focus:text-gray-700 focus:border-gray-300 transition duration-150
                                    ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 
                                            0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 
                                            0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <form method="DELETE" action="{{ route('destruir_user', ['user' => Auth::User()]) }}">
                                        @csrf
                                        <x-dropdown-link :href="route('destruir_user', ['user' => Auth::User()])"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Deletar conta') }}
                                        </x-dropdown-link>
                                    </form>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>    
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
        @if(!Request::is('/'))
            <div class = "page-title-inner bg-light border">
                <div class="container">
                    @if(Route::current()->getName() == 'password.reset')
                        {{Breadcrumbs::render(Route::current()->getName(), Request::route('token'), Request::get('email'))}}
                    @elseif(Route::current()->getName() == 'anuncio-info')
                        {{Breadcrumbs::render(Route::current()->getName(), Request::route('anuncio'))}}
                    @else
                        {{Breadcrumbs::render(Route::current()->getName())}}
                    @endif
                    <!--<div class="page-title-content container">
                        <h1 class="display-6 fw-bold">@yield('title')</h1>
                    </div>-->
                </div>
            </div>
        @endif
    </div>
</header>