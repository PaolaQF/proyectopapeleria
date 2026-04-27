<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', ['empleados' => $empleados]);
    }

    function show($id)
    {
        $empleado = Empleado::find($id);
        return view('empleados.show', ['empleado' => $empleado]);
    }

    function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('empleados.edit', ['empleado' => $empleado]);
    }

    function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);

        $empleado->sucursal_id = $request->sucursal_id;
        $empleado->nombre = $request->nombre;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->puesto = $request->puesto;
        $empleado->telefono = $request->telefono;
        $empleado->email = $request->email;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->salario = $request->salario;
        $empleado->turno = $request->turno;
        $empleado->estatus = $request->estatus;

        $empleado->save();

        return redirect()->route('empleados.index');
    }

    function create()
    {
        return view('empleados.create');
    }

    function store(Request $request)
    {
        $empleado = new Empleado();

        $empleado->id = $request->id;
        $empleado->sucursal_id = $request->sucursal_id;
        $empleado->nombre = $request->nombre;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->puesto = $request->puesto;
        $empleado->telefono = $request->telefono;
        $empleado->email = $request->email;
        $empleado->fecha_ingreso = $request->fecha_ingreso;
        $empleado->salario = $request->salario;
        $empleado->turno = $request->turno;
        $empleado->estatus = $request->estatus;

        $empleado->save();

        return redirect()->route('empleados.index');
    }

    function destroy($id)
{
    $empleado = Empleado::find($id);

    $empleado->estatus = 'Baja';
    $empleado->save();

    return redirect()->route('empleados.index');
}
}