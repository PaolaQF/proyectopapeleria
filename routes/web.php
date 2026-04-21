<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get ('/productos/create',[ProductoController::class, 'create'])->name('productos.create');
Route::put('/productos/update/{id}',[ProductoController::class, 'update'])->name('productos.update');
Route::get ('/listaproductos',[ProductoController::class, 'index'])->name('productos.index');
Route::get ('/productos/{id}',[ProductoController::class, 'show'])->name('productos.show');
Route::get ('/productos/edit/{id}',[ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos/store',[ProductoController::class, 'store'])->name('productos.store');
Route::Delete('/productos/delete/{id}',[ProductoController::class, 'destroy'])->name('productos.delete');
