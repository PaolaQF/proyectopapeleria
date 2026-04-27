@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosita-->
            <div class="form-header"
                 style="background-color:#FFF8FB;
                        color:#111;
                        padding:25px;
                        text-align:center;
                        border-bottom:2px solid #F5A2BE;">

                <h2 style="font-weight:800; margin:0;">
                    Datos del Cliente
                </h2>

                <p style="margin:5px 0 0 0; opacity:0.8;">
                    Consulta la información detallada del cliente
                </p>
            </div>

            <!-- Contenido -->
            <div class="p-4 bg-white">

                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Nombre</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->nombre }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Apellido Paterno</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->apellido_paterno }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Apellido Materno</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->apellido_materno }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Teléfono</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->telefono }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Email</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->email }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Calle</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->calle }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Número</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->numero }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Colonia</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->colonia }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Ciudad</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->ciudad }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Fecha de Registro</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->fecha_registro }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Puntos</small>
                            <div class="fs-5 fw-bold text-dark">{{ $cliente->puntos }}</div>
                        </div>
                    </div>

                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('clientes.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                        Volver
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection