<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

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

// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});

// Page not found
Breadcrumbs::for('errors.404', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Page Not Found');
});