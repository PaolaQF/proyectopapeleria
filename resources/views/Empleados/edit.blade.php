@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Editar Empleado</h2>

        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
            ← Volver
        </a>
    </div>

    <!-- FORMULARIO -->
    <form method="POST" action="{{ route('empleados.update', $empleado->id) }}">
        @csrf
        @method('PUT')

        <div class="row g-3">

            <!-- ID (solo lectura) -->
            <div class="col-md-4">
                <label class="form-label">ID</label>
                <input type="number" value="{{ $empleado->id }}" class="form-control" disabled>
            </div>

            <!-- Sucursal -->
            <div class="col-md-4">
                <label class="form-label">ID Sucursal</label>
                <input type="number" name="sucursal_id" value="{{ $empleado->sucursal_id }}" class="form-control">
            </div>

            <!-- Nombre -->
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" value="{{ $empleado->nombre }}" class="form-control">
            </div>

            <!-- Apellido P -->
            <div class="col-md-4">
                <label class="form-label">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" value="{{ $empleado->apellido_paterno }}" class="form-control">
            </div>

            <!-- Apellido M -->
            <div class="col-md-4">
                <label class="form-label">Apellido Materno</label>
                <input type="text" name="apellido_materno" value="{{ $empleado->apellido_materno }}" class="form-control">
            </div>

            <!-- Puesto -->
            <div class="col-md-4">
                <label class="form-label">Puesto</label>
                <input type="text" name="puesto" value="{{ $empleado->puesto }}" class="form-control">
            </div>

            <!-- Teléfono -->
            <div class="col-md-4">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" value="{{ $empleado->telefono }}" class="form-control">
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ $empleado->email }}" class="form-control">
            </div>

            <!-- Fecha -->
            <div class="col-md-4">
                <label class="form-label">Fecha Ingreso</label>
                <input type="date" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}" class="form-control">
            </div>

            <!-- Salario -->
            <div class="col-md-4">
                <label class="form-label">Salario</label>
                <input type="text" name="salario" value="{{ $empleado->salario }}" class="form-control">
            </div>

            <!-- Turno -->
            <div class="col-md-4">
                <label class="form-label">Turno</label>
                <input type="text" name="turno" value="{{ $empleado->turno }}" class="form-control">
            </div>

            <!-- Estatus -->
            <div class="col-md-4">
                <label class="form-label">Estatus</label>
                <input type="text" name="estatus" value="{{ $empleado->estatus }}" class="form-control">
            </div>

        </div>

        <!-- BOTONES -->
        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-warning px-4">
                Actualizar
            </button>
        </div>

    </form>

</div>

@endsection