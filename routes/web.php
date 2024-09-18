<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Product', ProductController::class);
Route::resource('Marcas', MarcasController::class);
Route::resource('Empleado', EmpleadoController::class);
