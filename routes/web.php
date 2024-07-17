<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\GolController;

Route::get('/', function () {
    return view('welcome');
});


// JUGADOR
Route::get('Jugador/create', [JugadorController::class, 'create'])->name('Jugador.create');
Route::post('Jugador/store', [JugadorController::class, 'store'])->name('Jugador.store');
Route::get('Jugador/list', [JugadorController::class, 'index'])->name('Jugador.index');
Route::delete('Jugador/{jugador}', [JugadorController::class, 'destroy'])->name('Jugador.destroy');
Route::get('Jugador/{jugador}', [JugadorController::class, 'show'])->name('Jugador.show');
Route::put('Jugador/{jugador}', [JugadorController::class, 'update'])->name('Jugador.update');
Route::get('Jugador/{jugador}/edit', [JugadorController::class, 'edit'])->name('Jugador.edit');

// GOL
Route::get('Gol/create', [GolController::class, 'create'])->name('Gol.create');
Route::post('Gol/store', [GolController::class, 'store'])->name('Gol.store');
Route::get('Gol/list', [GolController::class, 'index'])->name('Gol.index');
Route::delete('Gol/{gol}', [GolController::class, 'destroy'])->name('Gol.destroy');
Route::get('Gol/{gol}', [GolController::class, 'show'])->name('Gol.show');
Route::put('Gol/{gol}', [GolController::class, 'update'])->name('Gol.update');
Route::get('Gol/{gol}/edit', [GolController::class, 'edit'])->name('Gol.edit');

