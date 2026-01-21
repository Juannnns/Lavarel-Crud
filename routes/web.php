<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ProductoController;    
use App\Http\Controllers\Web\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');



//-----------------------------index muestra la vista de todos los productos-----------------------------//
Route::get('/productos', [ProductoController::class, 'index'])->name("productos.index");
//-----------------------------show muestra la vista de todos los productos-----------------------------//
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name("productos.show");
//-----------------------------show muestra la vista del formulario para crear un producto-----------------------------//
Route::get('/productos/crear', [ProductoController:: class, 'create'])->name("productos.create");
//-----------------------------store ejecuta la accion de crear un producto-----------------------------//
Route::post('/productos', [ProductoController::class, 'store'])->name("productos.store");
//-----------------------------edit muestra la vista del formulario para editar un producto-----------------------------//
Route::get('/productos/{id}/editar', [ProductoController::class, 'edit'])->name("productos.edit");
//-----------------------------update ejecuta la accion de actualizar un producto-----------------------------//
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name("productos.update");
//-----------------------------destroy ejecuta la accion de eliminar un producto-----------------------------//
Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name("productos.destroy");