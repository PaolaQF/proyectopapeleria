<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Mostrar todos los clientes
    function index(){
        $clientes = Cliente::all();
        return view("clientes.index", ['clientes' => $clientes]);
    }

    // Mostrar un cliente
    function show($id){
        $cliente = Cliente::find($id);
        return view('clientes.show', ['cliente' => $cliente]);
    }

    // Formulario crear
    function create(){
        return view('clientes.create');
    }

    // Guardar cliente
    function store(Request $request){

        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->apellido_paterno = $request->apellido_paterno;
        $cliente->apellido_materno = $request->apellido_materno;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->calle = $request->calle;
        $cliente->numero = $request->numero;
        $cliente->colonia = $request->colonia;
        $cliente->ciudad = $request->ciudad;
        $cliente->fecha_registro = $request->fecha_registro;
        $cliente->puntos = $request->puntos;

        $cliente->save();

        return redirect()->route('clientes.index');
    }

    // Editar cliente
    function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    // Actualizar cliente
    function update(Request $request, $id){

        $cliente = Cliente::find($id);

        $cliente->nombre = $request->nombre;
        $cliente->apellido_paterno = $request->apellido_paterno;
        $cliente->apellido_materno = $request->apellido_materno;
        $cliente->telefono = $request->telefono;
        $cliente->email = $request->email;
        $cliente->calle = $request->calle;
        $cliente->numero = $request->numero;
        $cliente->colonia = $request->colonia;
        $cliente->ciudad = $request->ciudad;
        $cliente->fecha_registro = $request->fecha_registro;
        $cliente->puntos = $request->puntos;

        $cliente->save();

        return redirect()->route('clientes.index');
    }

    // Eliminar cliente
    function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}