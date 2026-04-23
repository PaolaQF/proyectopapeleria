<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    
    //All: es un contenedor de todos los datos 
    function index(){
    $productos = Producto:: all();
    return view( "productos.index", [ 'productos' => $productos]);

    }

    function show ($id){
    $producto = Producto::find($id);
    return view('productos.show',[ 'producto' => $producto]);
    }

     function edit ($id){
    $producto = Producto::find($id);
    return view('Productos.edit',[ 'producto' => $producto]);
    }


     function create(){
        return view('productos.create');
    }


    function update(Request $request, $id){
    $producto = Producto::find($id);

    $producto->proveedor_id = $request->proveedor_id;
    $producto->categoria = $request->categoria;
    $producto->codigo_barras = $request->codigo_barras;
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->marca = $request->marca;
    $producto->unidad_medida = $request->unidad_medida;
    $producto->costo = $request->costo;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->stock_minimo = $request->stock_minimo;
    $producto->fecha_caducidad = $request->fecha_caducidad;
    $producto->activo = $request->activo;

    $producto->save();

    return redirect()->route('productos.index');
}



    

     function store (Request $request){

    $producto = new Producto();
     $producto->proveedor_id = $request->proveedor_id;
    $producto->categoria = $request->categoria;
    $producto->codigo_barras = $request->codigo_barras;
    $producto->nombre = $request->nombre;
    $producto->descripcion = $request->descripcion;
    $producto->marca = $request->marca;
    $producto->unidad_medida = $request->unidad_medida;
    $producto->costo = $request->costo;
    $producto->precio = $request->precio;
    $producto->stock = $request->stock;
    $producto->stock_minimo = $request->stock_minimo;
    $producto->fecha_caducidad = $request->fecha_caducidad;
    $producto->activo = $request->activo;

    $producto -> save();

     return redirect()->route('productos.index');
    }

     function destroy($id){
    $producto = Producto::find($id);
    $producto -> delete();
     return redirect()->route('productos.index');
    }

}