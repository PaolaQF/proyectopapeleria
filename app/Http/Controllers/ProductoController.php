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


    function update (Request $request,$id ){;
    $producto = Producto::find($id);
  
    $producto -> nombre = $request->nombre;
    $producto -> descripcion = $request->descripcion;
    $producto -> precio = $request->precio;
    $producto -> stock = $request->stock;
    $producto -> marca = $request->marca;
    $producto -> codigo_barras = $request->codigo_barras;
    $producto -> id_categoria = $request->id_categoria;
    $producto -> id_proveedor = $request->id_proveedor;
    $producto -> fecha_registro = $request->fecha_registro;
    $producto -> estado = $request->estado;

    $producto -> save();

     return redirect()->route('productos.index');
    }
     function store (Request $request){

    $producto = new Producto();
    $producto -> nombre = $request->nombre;
    $producto -> descripcion = $request->descripcion;
    $producto -> precio = $request->precio;
    $producto -> stock = $request->stock;
    $producto -> marca = $request->marca;
    $producto -> codigo_barras = $request->codigo_barras;
     $producto -> id_categoria = $request->id_categoria;
    $producto -> id_proveedor = $request->id_proveedor;
    $producto -> fecha_registro = $request->fecha_registro;
    $producto -> estado = $request->estado;
    $producto -> save();

     return redirect()->route('productos.index');
    }

     function destroy($id){
    $producto = Producto::find($id);
    $producto -> delete();
     return redirect()->route('productos.index');
    }

}