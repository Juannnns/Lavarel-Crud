<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



//-----------------------------index muestra la vista de todos los productos-----------------------------//
Route::get('/productos', [ProductoController::class, 'index'])->name("productos.index");
//-----------------------------show muestra la vista de todos los productos-----------------------------//
Route::get('/productos/{id}', [ProductoController::class, 'show'])->name("productos.show");
//-----------------------------show muestra la vista del formulario para crear un producto-----------------------------//
Route::get('/Productos/crear', function (){
    return 'aca se va a mostrar el formulario para crear un producto';
})->name("productos.create");
//-----------------------------store ejecuta la accion de crear un producto-----------------------------//
Route::post('/productos', function (){
    return 'aca se va a ejecutar la accion de crear un proucto';
})->name("productos.store");
//-----------------------------edit muestra la vista del formulario para editar un producto-----------------------------//
Route::get('/productos/{id}/editar', function ($id){
    return 'aca se va a mostrar el formulario para editar el producto con el ID: '.$id;
})->name("productos.edit");
//-----------------------------update ejecuta la accion de actualizar un producto-----------------------------//
Route::put('/productos/{id}', function (){
    return 'aca se va a ejecutar la acción de actualizar un producto';
})->name("productos.update");
//-----------------------------sumarCantidad ejecuta la accion de sumar cantidad a un producto-----------------------------//
Route::patch('/productos/{id}/sumar-cantidad/{cantidad}', function (){
    return 'aca se va a ejecutar la acción de sumar cntidad a producto';
})->name("productos.sumarCantidad");
//-----------------------------destroy ejecuta la accion de eliminar un producto-----------------------------//
Route::delete('/productos/{id}', function (){
    return 'aca se va a ejecutar la acción de eliminar un producto';
})->name("productos.destroy");