<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ClientesController;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('dash.vistas.index');
});

Route::get('/button', function () {
    return view('dash.vistas.ventas');
});


Route::get('/clientes/crear', [ClientesController::class, 'crear'])->name('clientes.crear');
Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');

