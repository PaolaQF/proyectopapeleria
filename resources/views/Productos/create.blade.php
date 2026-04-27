@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosa -->
            <div class="form-header ">
                <h2>Crear Nuevo Producto</h2>
                <p>Completa la información del producto</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white" >
                <form id="formulario" method="POST" action="{{ route('productos.store') }}">
                    @csrf

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="proveedor_id" class="form-label fw-semibold">ID de Proveedor</label>
                            <input type="text" class="form-control rounded-3" id="proveedor_id" name="proveedor_id" value="{{ old('proveedor_id') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="categoria" class="form-label fw-semibold">Categoría</label>
                            <input type="text" class="form-control rounded-3" id="categoria" name="categoria" value="{{ old('categoria') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="codigo_barras" class="form-label fw-semibold">Código de Barras</label>
                            <input type="text" class="form-control rounded-3" id="codigo_barras" name="codigo_barras" value="{{ old('codigo_barras') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="nombre" class="form-label fw-semibold">Nombre</label>
                            <input type="text" class="form-control rounded-3" id="nombre" name="nombre" value="{{ old('nombre') }}">
                        </div>

                        <div class="col-12">
                            <label for="descripcion" class="form-label fw-semibold">Descripción</label>
                            <input type="text" class="form-control rounded-3" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="marca" class="form-label fw-semibold">Marca</label>
                            <input type="text" class="form-control rounded-3" id="marca" name="marca" value="{{ old('marca') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="unidad_medida" class="form-label fw-semibold">Unidad de Medida</label>
                            <input type="text" class="form-control rounded-3" id="unidad_medida" name="unidad_medida" value="{{ old('unidad_medida') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="costo" class="form-label fw-semibold">Costo</label>
                            <input type="number" step="0.01" class="form-control rounded-3" id="costo" name="costo" value="{{ old('costo') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="precio" class="form-label fw-semibold">Precio</label>
                            <input type="number" step="0.01" class="form-control rounded-3" id="precio" name="precio" value="{{ old('precio') }}">
                        </div>

                        <div class="col-md-4">
                            <label for="stock" class="form-label fw-semibold">Stock</label>
                            <input type="number" class="form-control rounded-3" id="stock" name="stock" value="{{ old('stock') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="stock_minimo" class="form-label fw-semibold">Stock Mínimo</label>
                            <input type="text" class="form-control rounded-3" id="stock_minimo" name="stock_minimo" value="{{ old('stock_minimo') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="fecha_caducidad" class="form-label fw-semibold">Fecha de Caducidad</label>
                            <input type="date" class="form-control rounded-3" id="fecha_caducidad" name="fecha_caducidad" value="{{ old('fecha_caducidad') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="activo" class="form-label fw-semibold">Activo</label>
                            <select class="form-select rounded-3" id="activo" name="activo">
                                <option value="1" {{ old('activo', 1) == 1 ? 'selected' : '' }}>Sí</option>
                                <option value="0" {{ old('activo', 1) == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar
                        </button>

                        <a href="{{ route('productos.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                            Volver
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection