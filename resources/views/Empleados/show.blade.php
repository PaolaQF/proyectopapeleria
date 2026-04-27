@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Detalle del Empleado</h2>

        <!-- botón volver -->
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
            ← Volver
        </a>
    </div>

    <!-- TARJETA DE DATOS -->
    <div class="row g-4">

        <!-- COLUMNA IZQUIERDA -->
        <div class="col-md-6">

            <div class="card p-3 shadow-sm border-0">
                <h5 class="fw-bold mb-3">Información Personal</h5>

                <p><strong>ID:</strong> {{ $empleado->id }}</p>
                <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
                <p><strong>Apellido Paterno:</strong> {{ $empleado->apellido_paterno }}</p>
                <p><strong>Apellido Materno:</strong> {{ $empleado->apellido_materno }}</p>

                <p><strong>Teléfono:</strong> {{ $empleado->telefono }}</p>
                <p><strong>Email:</strong> {{ $empleado->email }}</p>
            </div>

        </div>

        <!-- COLUMNA DERECHA -->
        <div class="col-md-6">

            <div class="card p-3 shadow-sm border-0">
                <h5 class="fw-bold mb-3">Información Laboral</h5>

                <p><strong>ID Sucursal:</strong> {{ $empleado->sucursal_id }}</p>
                <p><strong>Puesto:</strong> {{ $empleado->puesto }}</p>

                <p><strong>Fecha de Ingreso:</strong> {{ $empleado->fecha_ingreso }}</p>
                <p><strong>Salario:</strong> ${{ $empleado->salario }}</p>

                <p><strong>Turno:</strong> {{ $empleado->turno }}</p>

                <!-- ESTATUS CON COLOR -->
                <p>
                    <strong>Estatus:</strong>
                    <span class="badge bg-success">
                        {{ $empleado->estatus }}
                    </span>
                </p>

            </div>

        </div>

    </div>

    <!-- BOTÓN EDITAR -->
    <div class="text-center mt-4">
        <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning px-4">
            Editar
        </a>
    </div>

</div>

@endsection