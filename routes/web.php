<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;

Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('/usuario/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('/usuario', [UsuarioController::class, 'store'])->name('usuario.store');

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->resource('usuario',UsuarioController::class)
->names('usuario');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
