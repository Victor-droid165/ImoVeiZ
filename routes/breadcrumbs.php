<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Anuncio;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Quem Somos
Breadcrumbs::for('quem-somos', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Quem Somos', route('quem-somos'));
});

// Home > Contato
Breadcrumbs::for('contato', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Contato', route('contato'));
});

// Home > Corretores
Breadcrumbs::for('corretores', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Corretores', route('corretores'));
});

// Home > Login
Breadcrumbs::for('login', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Login', route('login'));
});

// Home > Login > Esqueci Minha Senha
Breadcrumbs::for('password.request', function (BreadcrumbTrail $trail) {
    $trail->parent('login');
    $trail->push('Esqueci minha senha', route('password.request'));
});

// Home > Login > Esqueci Minha Senha > Resetar senha
Breadcrumbs::for('password.reset', function (BreadcrumbTrail $trail, String $token, String $email) {
    $trail->parent('password.request');
    $trail->push('Resetar senha', route('password.reset', ['token' => $token, 
    'email' => $email]));
});

// Home > Registro
Breadcrumbs::for('register', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Registro', route('register'));
});

// Home > Criar Anúncio
Breadcrumbs::for('form_criar_anuncio', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Criar Anúncio', route('form_criar_anuncio'));
});


// Home > [Anuncio]
Breadcrumbs::for('anuncio-info', function (BreadcrumbTrail $trail, Anuncio $anuncio) {
    $trail->parent('home');
    $trail->push($anuncio->titulo, route('anuncio-info', $anuncio));
});

// Page not found
Breadcrumbs::for('errors.404', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Página não Encontrada');
});