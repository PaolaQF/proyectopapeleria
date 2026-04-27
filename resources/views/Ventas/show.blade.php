@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado -->
            <div class="form-header">
                <h2>Datos de la Venta</h2>
                <p>Consulta la información detallada de la venta</p>
            </div>

            <!-- Contenido -->
            <div class="p-4 bg-white">

                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID</small>
                            <div class="fs-5 fw-bold">{{ $venta->id }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Sucursal</small>
                            <div class="fs-5 fw-bold">{{ $venta->sucursal_id }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Empleado</small>
                            <div class="fs-5 fw-bold">{{ $venta->empleado_id }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Cliente</small>
                            <div class="fs-5 fw-bold">{{ $venta->cliente_id }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Folio</small>
                            <div class="fs-5 fw-bold">{{ $venta->folio }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Fecha</small>
                            <div class="fs-5 fw-bold">{{ $venta->fecha_venta }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Método de Pago</small>
                            <div class="fs-5 fw-bold">{{ $venta->metodo_pago }}</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Subtotal</small>
                            <div class="fs-5 fw-bold">${{ $venta->subtotal }}</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Descuento</small>
                            <div class="fs-5 fw-bold">${{ $venta->descuento }}</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Impuesto</small>
                            <div class="fs-5 fw-bold">${{ $venta->impuesto }}</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Total</small>
                            <div class="fs-5 fw-bold">${{ $venta->total }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm border text-center" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Estatus</small>
                            <div class="fs-5 fw-bold">
                                {{ $venta->estatus }}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('ventas.index') }}" 
                       class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                        Volver
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection