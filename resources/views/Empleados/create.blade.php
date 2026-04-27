@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- TÍTULO -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Crear Empleado</h2>

        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">
            ← Volver
        </a>
    </div>

    <!-- FORMULARIO -->
    <form method="POST" action="{{ route('empleados.store') }}">
        @csrf

        <div class="row g-3">

            <!-- ID -->
            <div class="col-md-4">
                <label class="form-label">ID</label>
                <input type="number" class="form-control" disabled>
            </div>

            <!-- Sucursal -->
            <div class="col-md-4">
                <label class="form-label">ID Sucursal</label>
                <input type="number" name="sucursal_id" class="form-control">
            </div>

            <!-- Nombre -->
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <!-- Apellido P -->
            <div class="col-md-4">
                <label class="form-label">Apellido Paterno</label>
                <input type="text" name="apellido_paterno" class="form-control">
            </div>

            <!-- Apellido M -->
            <div class="col-md-4">
                <label class="form-label">Apellido Materno</label>
                <input type="text" name="apellido_materno" class="form-control">
            </div>

            <!-- Puesto -->
            <div class="col-md-4">
                <label class="form-label">Puesto</label>
                <input type="text" name="puesto" class="form-control">
            </div>

            <!-- Teléfono -->
            <div class="col-md-4">
                <label class="form-label">Teléfono</label>
                <input type="text" name="telefono" class="form-control">
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control">
            </div>

            <!-- Fecha -->
            <div class="col-md-4">
                <label class="form-label">Fecha Ingreso</label>
                <input type="date" name="fecha_ingreso" class="form-control">
            </div>

            <!-- Salario -->
            <div class="col-md-4">
                <label class="form-label">Salario</label>
                <input type="text" name="salario" class="form-control">
            </div>

            <!-- Turno -->
            <div class="col-md-4">
                <label class="form-label">Turno</label>
                <input type="text" name="turno" class="form-control">
            </div>

            <!-- Estatus -->
            <div class="col-md-4">
                <label class="form-label">Estatus</label>
                <input type="text" name="estatus" class="form-control">
            </div>

        </div>

        <!-- BOTONES -->
        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-dark px-4">
                Guardar
            </button>
        </div>

    </form>

</div>

@endsection