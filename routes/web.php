<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SucursalController;
<<<<<<< HEAD
use App\Http\Controllers\DetVentController;
=======
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;

>>>>>>> 256f6929ee6d15bad4ef283d1a6798f9e8311a3b

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

//RUTAS DE TABLA PRODUCTOS - DANNA 
Route::get ('/productos/create',[ProductoController::class, 'create'])->name('productos.create');
Route::put('/productos/update/{id}',[ProductoController::class, 'update'])->name('productos.update');
Route::get ('/listaproductos',[ProductoController::class, 'index'])->name('productos.index');
Route::get ('/productos/{id}',[ProductoController::class, 'show'])->name('productos.show');
Route::get ('/productos/edit/{id}',[ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos/store',[ProductoController::class, 'store'])->name('productos.store');
Route::Delete('/productos/delete/{id}',[ProductoController::class, 'destroy'])->name('productos.delete');


//RUTAS DE TABLA SUCURSALES - DANNA 
Route::get ('/sucursales/create',[SucursalController::class, 'create'])->name('sucursales.create');
Route::put('/sucursales/update/{id}',[SucursalController::class, 'update'])->name('sucursales.update');
Route::get ('/listasucursales',[SucursalController::class, 'index'])->name('sucursales.index');
Route::get ('/sucursales/{id}',[SucursalController::class, 'show'])->name('sucursales.show');
Route::get ('/sucursales/edit/{id}',[SucursalController::class, 'edit'])->name('sucursales.edit');
Route::post('/sucursales/store',[SucursalController::class, 'store'])->name('sucursales.store');
Route::Delete('/sucursales/delete/{id}',[SucursalController::class, 'destroy'])->name('sucursales.delete');

//RUTAS DE TABLA SUCURSALES - PAOLA
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::put('/clientes/update/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::get('/listaclientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::post('/clientes/store', [ClienteController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.delete');

<<<<<<< HEAD
Route::get('/detalle_venta/create', [DetVentController::class, 'create'])->name('detalle_venta.create');
Route::put('/detalle_venta/update/{id}', [DetVentController::class, 'update'])->name('detalle_venta.update');
Route::get('/detalle_venta', [DetVentController::class, 'index'])->name('detalle_venta.index');
Route::get('/detalle_venta/{id}', [DetVentController::class, 'show'])->name('detalle_venta.show');
Route::get('/detalle_venta/edit/{id}', [DetVentController::class, 'edit'])->name('detalle_venta.edit');
Route::post('/detalle_venta/store', [DetVentController::class, 'store'])->name('detalle_venta.store');
Route::delete('/detalle_venta/delete/{id}', [DetVentController::class, 'destroy'])->name('detalle_venta.delete');
=======
//RUTAS DE TABLA PROVEEDORES - ITZEL :)
Route::get('/proveedores/create',[ProveedorController::class,'create'])->name('proveedores.create');
Route::put('/proveedores/update/{id}',[ProveedorController::class,'update'])->name('proveedores.update');
Route::get('/proveedores', [ProveedorController::class,'index'])->name('proveedores.index');
Route::get('/proveedores/{id}', [ProveedorController::class,'show'])->name('proveedores.show');
Route::get('/proveedores/edit/{id}',[ProveedorController::class,'edit'])->name('proveedores.edit');
Route::post('/proveedores/store', [ProveedorController::class, 'store'])->name('proveedores.store');
Route::delete('/proveedores/delete/{id}',[ProveedorController::class, 'destroy'])->name('proveedores.delete');

//RUTAS DE TABLA VENTAS - ITZEL :)
Route::get('/ventas/create',[VentaController::class,'create'])->name('ventas.create');
Route::put('/ventas/update/{id}',[VentaController::class,'update'])->name('ventas.update');
Route::get('/ventas', [VentaController::class,'index'])->name('ventas.index');
Route::get('/ventas/{id}', [VentaController::class,'show'])->name('ventas.show');
Route::get('/ventas/edit/{id}',[VentaController::class,'edit'])->name('ventas.edit');
Route::post('/ventas/store', [VentaController::class, 'store'])->name('ventas.store');
Route::delete('/ventas/delete/{id}',[VentaController::class, 'destroy'])->name('ventas.delete');
>>>>>>> 256f6929ee6d15bad4ef283d1a6798f9e8311a3b

