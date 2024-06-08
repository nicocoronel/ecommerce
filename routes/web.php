<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AnaliticaController;
use App\Http\Controllers\OrdenController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [ProductoController::class, 'index'])->name('productos.index');

    Route::prefix('carrito')->group(function () {
        Route::get('/', [CarritoController::class, 'index'])->name('carrito.index');
        Route::post('/carrito/agregar', [CarritoController::class, 'add'])->name('carrito.add');
        Route::post('/remover/{cartItem}', [CarritoController::class, 'remove'])->name('carrito.remove');
    });

    Route::post('checkout', [OrdenController::class, 'checkout'])->name('ordenes.checkout');
    Route::get('analitica', [AnaliticaController::class, 'index'])->name('analitica.index');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
