@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- titulo -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Empleados</h2>

        <!-- boton nuevo -->
        <a href="{{ route('empleados.create') }}" class="btn btn-dark">
            + Nuevo
        </a>
    </div>

    <!-- TABLA -->
    <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">

            <!-- ENCABEZADO -->
            <thead style="background-color:#F5A2BE; color:#222;">
                <tr>
                    <th>ID</th>
                    <th>Sucursal</th>
                    <th>Nombre</th>
                    <th>Apellido P</th>
                    <th>Apellido M</th>
                    <th>Puesto</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Ingreso</th>
                    <th>Salario</th>
                    <th>Turno</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <!-- CUERPO -->
            <tbody>
                @foreach($empleados as $empleado)
                <tr>

                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->sucursal_id }}</td>
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->apellido_paterno }}</td>
                    <td>{{ $empleado->apellido_materno }}</td>
                    <td>{{ $empleado->puesto }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->fecha_ingreso }}</td>
                    <td>{{ $empleado->salario }}</td>
                    <td>{{ $empleado->turno }}</td>
                    <td>{{ $empleado->estatus }}</td>

                    <!-- ACCIONES -->
                   <td>
    <div class="d-flex justify-content-center gap-2">
        
        <a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-sm btn-info">
            Ver
        </a>

        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-warning">
            Editar
        </a>

        <form method="POST" action="{{ route('empleados.delete', $empleado->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-sm btn-danger">
                Status
            </button>
        </form>

    </div>
</td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection