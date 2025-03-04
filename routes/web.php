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

Route::get('/setup-store', function () {
    return view('setup_store'); 
})->name('setup.store');

Route::get('/setup-profile', function () {
    return view('setup_profile');
})->name('setup.profile');

Route::get('/admin', function () {
    return view('dash.vistas.index');
});

Route::get('/products', function () {
    return view('dash.vistas.products');
});
Route::get('/cards', function () {
    return view('dash.vistas.cards');
});
Route::get('/colors', function () {
    return view('dash.vistas.colors');
});

Route::get('/clientes/crear', [ClientesController::class, 'crear'])->name('clientes.crear');
Route::get('/clientes/leer', [ClientesController::class, 'leer'])->name('clientes.leer');
Route::get('/clientes/eliminar', [ClientesController::class, 'eliminar'])->name('clientes.eliminar');
Route::delete('/clientes/destroy', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::group(['middleware' => ['auth']], function () {
    Route::get('roles', [RoleController::class, 'index']);
});

