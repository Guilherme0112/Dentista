<?php

use App\Http\Controllers\dentistaController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function(){
    Route::get('/', [dentistaController::class, 'index'])->name('pages-index');
    Route::get('/sobre', [dentistaController::class, 'sobre'])->name('pages-sobre');
    Route::get('/planos', [dentistaController::class, 'planos'])->name('pages-planos');
    Route::get('/contato', [dentistaController::class, 'contato'])->name('pages-contato');
});

Route::prefix('/perfil')->group(function(){
    Route::get('/', [dentistaController::class, 'perfil'])->name('pages-perfil');
});

Route::fallback(function(){
    return view('pages.404.404');
});