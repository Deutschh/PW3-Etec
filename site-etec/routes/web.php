<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Rotas do site da ETEC
|--------------------------------------------------------------------------
| Aqui definimos quais URLs o usuário pode acessar no projeto.
| Cada rota chama um método específico do SiteController.
*/

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/cursos', [SiteController::class, 'cursos'])->name('cursos');

Route::get('/eventos', [SiteController::class, 'eventos'])->name('eventos');

Route::get('/formulario', [SiteController::class, 'formulario'])->name('formulario');

Route::post('/formulario', [SiteController::class, 'enviarFormulario'])->name('formulario.enviar');

Route::get('/mensagens', [SiteController::class, 'mensagens'])->name('mensagens');

/*
|--------------------------------------------------------------------------
| Rota fallback
|--------------------------------------------------------------------------
| Caso o usuário acesse uma URL inexistente, esta rota será executada.
*/

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});