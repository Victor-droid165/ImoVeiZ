<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LayoutController::class, 'index'])
                ->name('home');

Route::get('/quem-somos', [LayoutController::class, 'quemSomos'])
                ->name('quem-somos');

Route::get('/contato', [LayoutController::class, 'contato'])
                ->name('contato');

Route::get('/corretores', [LayoutController::class, 'corretores'])
                ->name('corretores');

require __DIR__.'/auth.php';
