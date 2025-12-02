<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('instrumentos', InstrumentoController::class);