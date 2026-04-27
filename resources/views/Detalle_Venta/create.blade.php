@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado rosa -->
            <div class="form-header">
                <h2>Crear Nuevo Detalle de Venta</h2>
                <p>Completa la información del detalle de venta</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white">
                <form method="POST" action="{{ route('detalle_venta.store') }}">
                    @csrf

                    <div class="row g-4">

          

            <div class="col-md-6">
                <label for="venta_id" class="form-label fw-semibold">ID de Venta:</label>
                <input type="text" class="form-control rounded-3" id="venta_id"   name="venta_id" value="{{ old('venta_id') }}">
            </div>

            <div class="col-md-6">
                <label for="producto_id" class="form-label fw-semibold">ID de Producto:</label>
                <input type="text" class="form-control rounded-3" id="producto_id"   name="producto_id" value="{{ old('producto_id') }}">
            </div>

            <div class="col-md-6">
                <label for="cantidad" class="form-label fw-semibold">Cantidad:</label>
                <input type="text" class="form-control rounded-3" id="cantidad"  name="cantidad" value="{{ old('cantidad') }}">
            </div>

             <div class="col-md-6">
                <label for="precio_unitario" class="form-label fw-semibold">Precio Unitario:</label>
                <input type="text" class="form-control rounded-3" id="precio_unitario"  name="precio_unitario" value="{{ old('precio_unitario') }}">
            </div>

            <div class="col-md-6">
                <label for="descuento" class="form-label fw-semibold">Descuento:</label>
                <input type="text" class="form-control rounded-3" id="descuento"  name="descuento" value="{{ old('descuento') }}">
            </div>

            <div class="col-md-6">
                <label for="impuesto" class="form-label fw-semibold">Impuesto:</label>
                <input type="text" class="form-control rounded-3" id="impuesto"  name="impuesto" value="{{ old('impuesto') }}">
            </div>

             <div class="col-md-6">
                <label for="subtotal" class="form-label fw-semibold">Subtotal:</label>
                <input type="text" class="form-control rounded-3" id="subtotal"  name="subtotal" value="{{ old('subtotal') }}">
            </div>

            <div class="col-md-6">
                <label for="observaciones" class="form-label fw-semibold">Observaciones:</label>
                <input type="text" class="form-control rounded-3" id="observaciones"  name="observaciones" value="{{ old('observaciones') }}">
            </div>

            
            <div class="col-md-6">
                <label for="entregado" class="form-label fw-semibold">Entregado:</label>
                <select class="form-select rounded-3" id="entregado" name="entregado" >
                    <option value="1" {{old('entregado', 1) == 1 ? 'selected' : ''}}>Sí</option>
                    <option value="0" {{old('entregado', 1) == 0 ? 'selected' : ''}}>No</option>
                </select>
            </div>

</div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar
                        </button>

                        <a href="{{ route('detalle_venta.index') }}" class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                            Volver
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
