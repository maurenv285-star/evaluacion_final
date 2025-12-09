<?php

use App\Http\Controllers\ProductoController;

Route::resource('productos', ProductoController::class);
Route::get('productos/stock-alto', [ProductoController::class, 'stockAlto'])->name('productos.stock-alto');
