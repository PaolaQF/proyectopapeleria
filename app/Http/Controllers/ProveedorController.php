<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    function index(){
        $proveedores = Proveedor::all();
        return view("proveedores.index",['proveedores'=>$proveedores]);
    }

    function show($id){
        $proveedor = Proveedor::find($id);
        return view("proveedores.show",['proveedor'=>$proveedor]);
        }

    function edit ($id){
        $proveedor = Proveedor::find($id);
        return view ("proveedores.edit", ['proveedor'=>$proveedor]);
        }

    function create (){
        return view('proveedores.create');
    }

    function update (Request $request,$id){
        $proveedor = Proveedor::find($id);
        $proveedor->nombre_comercial = $request->nombre_comercial;
        $proveedor->contacto_nombre = $request->contacto_nombre;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->calle = $request->calle;
        $proveedor->numero = $request->numero;
        $proveedor->colonia = $request->colonia;
        $proveedor->ciudad = $request->ciudad;
        $proveedor->rfc = $request->rfc;
        $proveedor->dias_credito = $request->dias_credito;
        $proveedor->estatus = $request->estatus;
        $proveedor->save();

        return redirect()->route('proveedores.index');
    }

    function store (Request $request){
        $proveedor = new Proveedor();
        $proveedor->nombre_comercial = $request->nombre_comercial;
        $proveedor->contacto_nombre = $request->contacto_nombre;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;
        $proveedor->calle = $request->calle;
        $proveedor->numero = $request->numero;
        $proveedor->colonia = $request->colonia;
        $proveedor->ciudad = $request->ciudad;
        $proveedor->rfc = $request->rfc;
        $proveedor->dias_credito = $request->dias_credito;
        $proveedor->estatus = $request->estatus;
        $proveedor->save();

        return redirect()->route('proveedores.index');
    }

    function destroy($id){
        $proveedor = Proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}
