<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\IntegranteController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('instrumentos', InstrumentoController::class);
Route::resource('integrantes', IntegranteController::class);