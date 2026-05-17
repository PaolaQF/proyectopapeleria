<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosApiController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    public function show(string $id)
    {
        $empleado = Empleado::find($id);

        if ($empleado) {
            return response()->json($empleado);
        } else {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
    }

    public function store(Request $request)
    {
        $empleado = new Empleado();

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

        return response()->json($empleado);
    }

    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);

        if ($empleado) {
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

            return response()->json($empleado);
        } else {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
    }

    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);

        if ($empleado) {
            $empleado->estatus = 'Baja';
            $empleado->save();

            return response()->json(['message' => 'Empleado dado de baja']);
        } else {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }
    }
}