<?php

use App\Http\Controllers\dentistaController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function(){
    Route::get('/', [dentistaController::class, 'index'])->name('pages-index');
    Route::get('/sobre', [dentistaController::class, 'sobre'])->name('pages-sobre');
});
