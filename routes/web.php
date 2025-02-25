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

/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('dash.vistas.index');
});

Route::get('/button', function () {
    return view('dash.vistas.ventas');
});

// Ruta para roles
Route::get('roles', [RoleController::class, 'index']);
Route::get('/clientes/crear', [ClientesController::class, 'crear'])->name('clientes.crear');




