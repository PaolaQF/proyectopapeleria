@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosa -->
            <div class="form-header">
                <h2>Editar Sucursal</h2>
                <p>Actualiza la información de la sucursal</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white">
                <form method="POST" action="{{ route('sucursales.update', $sucursal->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-semibold">Nombre</label>
                            <input type="text" class="form-control rounded-3" id="nombre" name="nombre"
                                   value="{{ old('nombre', $sucursal->nombre) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                            <input type="number" class="form-control rounded-3" id="telefono" name="telefono"
                                   value="{{ old('telefono', $sucursal->telefono) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email"
                                   value="{{ old('email', $sucursal->email) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="calle" class="form-label fw-semibold">Calle</label>
                            <input type="text" class="form-control rounded-3" id="calle" name="calle"
                                   value="{{ old('calle', $sucursal->calle) }}">
                        </div>

                        <div class="col-md-4">
                            <label for="numero" class="form-label fw-semibold">Número</label>
                            <input type="number" class="form-control rounded-3" id="numero" name="numero"
                                   value="{{ old('numero', $sucursal->numero) }}">
                        </div>

                        <div class="col-md-4">
                            <label for="colonia" class="form-label fw-semibold">Colonia</label>
                            <input type="text" class="form-control rounded-3" id="colonia" name="colonia"
                                   value="{{ old('colonia', $sucursal->colonia) }}">
                        </div>

                        <div class="col-md-4">
                            <label for="codigo_postal" class="form-label fw-semibold">Código Postal</label>
                            <input type="number" class="form-control rounded-3" id="codigo_postal" name="codigo_postal"
                                   value="{{ old('codigo_postal', $sucursal->codigo_postal) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="ciudad" class="form-label fw-semibold">Ciudad</label>
                            <input type="text" class="form-control rounded-3" id="ciudad" name="ciudad"
                                   value="{{ old('ciudad', $sucursal->ciudad) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="estado" class="form-label fw-semibold">Estado</label>
                            <input type="text" class="form-control rounded-3" id="estado" name="estado"
                                   value="{{ old('estado', $sucursal->estado) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="fecha_apertura" class="form-label fw-semibold">Fecha de Apertura</label>
                            <input type="date" class="form-control rounded-3" id="fecha_apertura" name="fecha_apertura"
                                   value="{{ old('fecha_apertura', $sucursal->fecha_apertura) }}">
                        </div>

                        <div class="col-md-6">
                            <label for="activa" class="form-label fw-semibold">Activa</label>
                            <select class="form-select rounded-3" id="activa" name="activa">
                                <option value="1" {{ old('activa', $sucursal->activa) == 1 ? 'selected' : '' }}>Sí</option>
                                <option value="0" {{ old('activa', $sucursal->activa) == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar Cambios
                        </button>

                        <a href="{{ route('sucursales.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                            Volver
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection