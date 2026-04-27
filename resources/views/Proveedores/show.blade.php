@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado -->
            <div class="form-header">
                <h2>Datos del Proveedor</h2>
                <p>Consulta la información detallada del proveedor</p>
            </div>

            <!-- Contenido -->
            <div class="p-4 bg-white">

                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Nombre Comercial</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->nombre_comercial }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Contacto</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->contacto_nombre }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Teléfono</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->telefono }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Email</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->email }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Calle</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->calle }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Número</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->numero }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Colonia</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->colonia }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Ciudad</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->ciudad }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">RFC</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->rfc }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Días de Crédito</small>
                            <div class="fs-5 fw-bold">{{ $proveedor->dias_credito }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border text-center" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Estatus</small>
                            <div class="fs-5 fw-bold">
                                {{ $proveedor->estatus }}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('proveedores.index') }}" 
                       class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                        Volver
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection