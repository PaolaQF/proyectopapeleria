@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosa -->
            <div class="form-header">
                <h2>Datos de la Sucursal</h2>
                <p>Consulta la información detallada de la sucursal</p>
            </div>

            <!-- Contenido -->
            <div class="p-4 bg-white">

                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Nombre</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->nombre }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Teléfono</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->telefono }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Email</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->email }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Calle</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->calle }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Número</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->numero }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Colonia</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->colonia }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Ciudad</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->ciudad }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Estado</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->estado }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Código Postal</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->codigo_postal }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Fecha de Apertura</small>
                            <div class="fs-5 fw-bold text-dark">{{ $sucursal->fecha_apertura }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm text-center border h-100" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Activa</small>
                            <div class="fs-5 fw-bold text-dark">
                                {{ $sucursal->activa ? 'Sí' : 'No' }}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('sucursales.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                        Volver
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection