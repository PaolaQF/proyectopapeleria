<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    //All: es un contenedor de todos los datos 
    function index(){
        $sucursales = Sucursal:: all();
        return view( "Sucursales.index", [ 'sucursales' => $sucursales]);

    }

    function show ($id){
        $sucursal = Sucursal::find($id);
        return view('sucursales.show',[ 'sucursal' => $sucursal]);
    }

     function edit ($id){
        $sucursal = Sucursal::find($id);
        return view('sucursales.edit',[ 'sucursal' => $sucursal]);
    }


     function create(){
        return view('sucursales.create');
    }


    function update(Request $request, $id){
        $sucursal = Sucursal::find($id);

            
        $sucursal->nombre = $request->nombre;
        $sucursal->telefono = $request->telefono;
        $sucursal->email = $request->email;
        $sucursal->calle = $request->calle;
        $sucursal->numero = $request->numero;
        $sucursal->colonia = $request->colonia;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->estado = $request->estado;
        $sucursal->codigo_postal = $request->codigo_postal;
        $sucursal->fecha_apertura = $request->fecha_apertura;
        $sucursal->activa = $request->activa; 

        $sucursal->save();

        return redirect()->route('sucursales.index');
    }



    

     function store (Request $request){
        $sucursal = new Sucursal();
        $sucursal->nombre = $request->nombre;
        $sucursal->telefono = $request->telefono;
        $sucursal->email = $request->email;
        $sucursal->calle = $request->calle;
        $sucursal->numero = $request->numero;
        $sucursal->colonia = $request->colonia;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->estado = $request->estado;
        $sucursal->codigo_postal = $request->codigo_postal;
        $sucursal->fecha_apertura = $request->fecha_apertura;
        $sucursal->activa = $request->activa; 

        $sucursal->save();


     return redirect()->route('sucursales.index');
    }

    

     function destroy($id){
        $sucursal = Sucursal::find($id);
        $sucursal -> delete();
        return redirect()->route('sucursales.index');
    }

}
