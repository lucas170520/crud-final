<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\IntegranteController;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\EnsaioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('instrumentos', InstrumentoController::class);
Route::resource('integrantes', IntegranteController::class);
Route::resource('musicas', MusicaController::class);
Route::resource('ensaios', EnsaioController::class);