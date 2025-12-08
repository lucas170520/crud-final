<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstrumentoController;
use App\Http\Controllers\IntegranteController;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\EnsaioController;
use App\Http\Controllers\EventoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('instrumentos', InstrumentoController::class);
    Route::resource('integrantes', IntegranteController::class);
    Route::resource('musicas', MusicaController::class);
    Route::resource('ensaios', EnsaioController::class);
    Route::resource('eventos', EventoController::class);
});

require __DIR__.'/auth.php';