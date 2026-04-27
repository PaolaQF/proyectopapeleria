@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosa -->
            <div class="form-header">
                <h2>Datos del Producto</h2>
                <p>Consulta la información detallada del producto</p>
            </div>

            <!-- Contenido -->
            <div class="p-4 bg-white">

                <div class="row g-4">

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">ID Proveedor</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->proveedor_id }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Categoría</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->categoria }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Código de Barras</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->codigo_barras }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Nombre</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->nombre }}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Marca</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->marca }}</div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="rounded-4 p-3 shadow-sm border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Descripción</small>
                            <div class="fs-6 fw-semibold text-dark">{{ $producto->descripcion }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Unidad de Medida</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->unidad_medida }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Costo</small>
                            <div class="fs-5 fw-bold text-dark">${{ $producto->costo }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Precio</small>
                            <div class="fs-5 fw-bold text-dark">${{ $producto->precio }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Stock</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->stock }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Stock Mínimo</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->stock_minimo }}</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="rounded-4 p-3 shadow-sm h-100 border" style="background-color:#FFF2F7;">
                            <small class="text-muted fw-semibold">Fecha de Caducidad</small>
                            <div class="fs-5 fw-bold text-dark">{{ $producto->fecha_caducidad }}</div>
                        </div>
                    </div>

                    <div class="col-md-6 mx-auto">
                        <div class="rounded-4 p-3 shadow-sm text-center border" style="background-color:#FFF8FB;">
                            <small class="text-muted fw-semibold">Activo</small>
                            <div class="fs-5 fw-bold text-dark">
                                {{ $producto->activo ? 'Sí' : 'No' }}
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botón -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ route('productos.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                        Volver
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection