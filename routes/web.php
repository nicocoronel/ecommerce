<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
Route::post('carrito/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
Route::get('carrito', [CarritoController::class, 'mostrar'])->name('carrito.mostrar');

// Rutas de autenticación generadas por Breeze
require __DIR__.'/auth.php';
