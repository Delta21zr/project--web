<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
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

Route::get('/cash', function () {
    return view('dash.vistas.cash');
});

Route::get('/catalog', function () {
    return view('dash.vistas.catalog');
});

Route::get('/custumer', function () {
    return view('dash.vistas.custumer');
});

Route::get('/sales', function () {
    return view('dash.vistas.sales');
});


Route::get('/clientes/crear', [ClientesController::class, 'crear'])->name('clientes.crear');

Route::get('/clientes/leer', [ClientesController::class, 'leer'])->name('clientes.leer');

Route::get('/clientes/eliminar', [ClientesController::class, 'eliminar'])->name('clientes.eliminar');

Route::delete('/clientes/{cliente_id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

Route::get('/clientes/editar/{cliente_id}', [ClientesController::class, 'edit'])->name('clientes.editar');

Route::post('/clientes/actualizar/{cliente_id}', [ClientesController::class, 'update'])->name('clientes.actualizar');

Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');




// Rutas de productos - Accesibles para todos (sin autenticación)

Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/crear', [ProductosController::class, 'crear'])->name('productos.crear');
Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
Route::get('/productos/{id}/editar', [ProductosController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductosController::class, 'update'])->name('productos.update');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('productos.destroy');


Route::group(['middleware' => ['auth']], function () {
    Route::get('roles', [RoleController::class, 'index']);

});


