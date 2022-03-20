<?php

use App\Http\Controllers\Auth\SocialAccounts\FaceBookController;
use App\Http\Controllers\Auth\SocialAccounts\GithubController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AnuncioController;
use App\Http\Controllers\EnderecoController;
use Illuminate\Support\Facades\Route;

Route::middleware('guestORverified')->group(function () {
    Route::get('/', [LayoutController::class, 'index'])
                ->name('home');

    Route::get('/quem-somos', [LayoutController::class, 'quemSomos'])
                    ->name('quem-somos');

    Route::get('/contato', [LayoutController::class, 'contato'])
                    ->name('contato');

    Route::get('/corretores', [LayoutController::class, 'corretores'])
                    ->name('corretores');

    Route::get('/anuncio/{anuncio}', [AnuncioController::class, 'show'])
                    ->name('anuncio-info')->withoutMiddleware('auth');
});

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::prefix('login')->name('login.')->group( function(){

        Route::prefix('github')->name('github.')->group( function(){
            Route::get('auth', [GithubController::class, 'loginUsingGithub'])->name('auth');
            Route::get('callback', [GithubController::class, 'callbackFromGithub'])->name('callback');
        });

        Route::prefix('facebook')->name('facebook.')->group( function(){
            Route::get('auth', [FaceBookController::class, 'loginUsingFacebook'])->name('auth');
            Route::get('callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');
        });
    });          

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('logout');
});

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/anuncios/criar', [AnuncioController::class,'create'])
                ->name('form_criar_anuncio');

    Route::post('/anuncios/criar', [AnuncioController::class,'store'])
                ->name('criar_anuncio');

    Route::delete('/anuncios/{id}', [AnuncioController::class,'destroy'])
                ->name('destruir_anuncio');

    Route::post('api/fetch-cidades', [EnderecoController::class, 'fetchCidade']);
});
