@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado -->
            <div class="form-header">
                <h2>Crear Nueva Venta</h2>
                <p>Completa la información de la venta</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white">
                <form method="POST" action="{{ route('ventas.store') }}">
                    @csrf

                    <div class="row g-4">

                        <!-- IDs -->
                        <div class="col-md-4">
                            <label for="sucursal_id" class="form-label fw-semibold">ID Sucursal:</label>
                            <input type="number" class="form-control rounded-3"
                                   id="sucursal_id" name="sucursal_id"
                                   value="{{ old('sucursal_id') }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="empleado_id" class="form-label fw-semibold">ID Empleado:</label>
                            <input type="number" class="form-control rounded-3"
                                   id="empleado_id" name="empleado_id"
                                   value="{{ old('empleado_id') }}" required>
                        </div>

                        <div class="col-md-4">
                            <label for="cliente_id" class="form-label fw-semibold">ID Cliente:</label>
                            <input type="number" class="form-control rounded-3"
                                   id="cliente_id" name="cliente_id"
                                   value="{{ old('cliente_id') }}" required>
                        </div>

                        <!-- Folio -->
                        <div class="col-md-6">
                            <label for="folio" class="form-label fw-semibold">Folio:</label>
                            <input type="text" class="form-control rounded-3"
                                   id="folio" name="folio"
                                   value="{{ old('folio') }}"
                                   pattern="PAPE-[0-9]{5}"
                                   placeholder="PAPE-00001" required>
                        </div>

                        <!-- Fecha -->
                        <div class="col-md-6">
                            <label for="fecha_venta" class="form-label fw-semibold">Fecha y Hora:</label>
                            <input type="datetime-local" class="form-control rounded-3"
                                   id="fecha_venta" name="fecha_venta"
                                   value="{{ old('fecha_venta', date('Y-m-d\TH:i')) }}" required>
                        </div>

                        <!-- Método de pago -->
                        <div class="col-md-6">
                            <label for="metodo_pago" class="form-label fw-semibold">Método de Pago:</label>
                            <select class="form-control rounded-3" id="metodo_pago" name="metodo_pago" required>
                                <option value="">Seleccione una opción</option>
                                <option value="Efectivo" {{ old('metodo_pago') == 'Efectivo' ? 'selected' : '' }}>Efectivo</option>
                                <option value="Tarjeta débito" {{ old('metodo_pago') == 'Tarjeta débito' ? 'selected' : '' }}>Tarjeta débito</option>
                                <option value="Tarjeta crédito" {{ old('metodo_pago') == 'Tarjeta crédito' ? 'selected' : '' }}>Tarjeta crédito</option>
                                <option value="Transferencia" {{ old('metodo_pago') == 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
                            </select>
                        </div>

                        <!-- Totales -->
                        <div class="col-md-6">
                            <label for="subtotal" class="form-label fw-semibold">Subtotal:</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   id="subtotal" name="subtotal"
                                   value="{{ old('subtotal') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label for="descuento" class="form-label fw-semibold">Descuento:</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   id="descuento" name="descuento"
                                   value="{{ old('descuento') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="impuesto" class="form-label fw-semibold">Impuesto:</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   id="impuesto" name="impuesto"
                                   value="{{ old('impuesto') }}">
                        </div>

                        <div class="col-md-6">
                            <label for="total" class="form-label fw-semibold">Total:</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   id="total" name="total"
                                   value="{{ old('total') }}" required>
                        </div>

                        <!-- Estatus -->
                        <div class="col-md-6">
                            <label for="estatus" class="form-label fw-semibold">Estatus:</label>
                            <select class="form-control rounded-3" id="estatus" name="estatus" required>
                                <option value="">Seleccione una opción</option>
                                <option value="Pagada" {{ old('estatus') == 'Pagada' ? 'selected' : '' }}>Pagada</option>
                                <option value="En Proceso" {{ old('estatus') == 'En Proceso' ? 'selected' : '' }}>En Proceso</option>
                                <option value="Cancelada" {{ old('estatus') == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
                            </select>
                        </div>

                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar
                        </button>

                        <a href="{{ route('ventas.index') }}" 
                           class="btn btn-outline-dark px-4 py-2 rounded-3 shadow-sm">
                            Volver
                        </a>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection