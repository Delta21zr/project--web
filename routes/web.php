<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ClientesController;

Route::get('/login', function () {
    return view('login'); // Debe coincidir con el nombre del archivo en resources/views/
})->name('login');

Route::get('/register', function () {
    return view('register'); // Asegúrate de tener un archivo register.blade.php
})->name('register');

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('dash.vistas.index');
});

Route::get('/clientes/crear', [ClientesController::class, 'crear'])->name('clientes.crear');
Route::get('/clientes/leer', [ClientesController::class, 'leer'])->name('clientes.leer');
Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
