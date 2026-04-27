@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosa -->
            <div class="form-header">
                <h2>Datos del Detalle de Venta</h2>
                <p>Consulta la información detallada del detalle de venta</p>
            </div>

            <!-- Contenido -->
            <div class="p-4 bg-white">

                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID Venta</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->venta_id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">ID Producto</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->producto_id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Cantidad</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->cantidad }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Precio Unitario</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->precio_unitario }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Descuento</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->descuento }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Impuesto</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->impuesto }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Subtotal</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->subtotal }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Observaciones</small>
                            <div class="fs-5 fw-bold text-dark">{{ $DetVent->observaciones }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm text-center border h-100" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Entregado</small>
                            <div class="fs-5 fw-bold text-dark">
                                {{ $DetVent->entregado ? 'Sí' : 'No' }}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('detalle_venta.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                        Volver
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection