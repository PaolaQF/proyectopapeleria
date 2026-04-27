@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado -->
            <div class="form-header">
                <h2>Crear Nuevo Cliente</h2>
                <p>Completa la información del cliente</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white">
                <form method="POST" action="{{ route('clientes.store') }}">
                    @csrf

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nombre</label>
                            <input type="text" class="form-control rounded-3" name="nombre" value="{{ old('nombre') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Apellido Paterno</label>
                            <input type="text" class="form-control rounded-3" name="apellido_paterno" value="{{ old('apellido_paterno') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Apellido Materno</label>
                            <input type="text" class="form-control rounded-3" name="apellido_materno" value="{{ old('apellido_materno') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Teléfono</label>
                            <input type="number" class="form-control rounded-3" name="telefono" value="{{ old('telefono') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control rounded-3" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Calle</label>
                            <input type="text" class="form-control rounded-3" name="calle" value="{{ old('calle') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Número</label>
                            <input type="number" class="form-control rounded-3" name="numero" value="{{ old('numero') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Colonia</label>
                            <input type="text" class="form-control rounded-3" name="colonia" value="{{ old('colonia') }}">
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Ciudad</label>
                            <input type="text" class="form-control rounded-3" name="ciudad" value="{{ old('ciudad') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Fecha de Registro</label>
                            <input type="date" class="form-control rounded-3" name="fecha_registro" value="{{ old('fecha_registro') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Puntos</label>
                            <input type="number" class="form-control rounded-3" name="puntos" value="{{ old('puntos') }}">
                        </div>

                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar
                        </button>

                        <a href="{{ route('clientes.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                            Volver
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection