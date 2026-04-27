@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="main-card p-0 overflow-hidden">

            <!-- Encabezado -->
            <div class="form-header">
                <h2>Editar Venta</h2>
                <p>Actualiza la información de la venta</p>
            </div>

            <!-- Formulario -->
            <div class="p-4 bg-white">
                <form method="POST" action="{{ route('ventas.update', $venta->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="row g-4">

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">ID Sucursal</label>
                            <input type="number" class="form-control rounded-3"
                                   name="sucursal_id"
                                   value="{{ old('sucursal_id', $venta->sucursal_id) }}" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">ID Empleado</label>
                            <input type="number" class="form-control rounded-3"
                                   name="empleado_id"
                                   value="{{ old('empleado_id', $venta->empleado_id) }}" required>
                        </div>

                        <div class="col-md-4">
                            <label class="form-label fw-semibold">ID Cliente</label>
                            <input type="number" class="form-control rounded-3"
                                   name="cliente_id"
                                   value="{{ old('cliente_id', $venta->cliente_id) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Folio</label>
                            <input type="text" class="form-control rounded-3"
                                   name="folio"
                                   value="{{ old('folio', $venta->folio) }}"
                                   pattern="PAPE-[0-9]{5}"
                                   placeholder="PAPE-00001"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Fecha y Hora</label>
                            <input type="datetime-local" class="form-control rounded-3"
                                   name="fecha_venta"
                                   value="{{ old('fecha_venta', \Carbon\Carbon::parse($venta->fecha_venta)->format('Y-m-d\TH:i')) }}"
                                   required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Método de Pago</label>
                            <select class="form-control rounded-3" name="metodo_pago" required>

                                <option value="Efectivo"
                                    {{ old('metodo_pago', $venta->metodo_pago) == 'Efectivo' ? 'selected' : '' }}>
                                    Efectivo
                                </option>

                                <option value="Tarjeta débito"
                                    {{ old('metodo_pago', $venta->metodo_pago) == 'Tarjeta débito' ? 'selected' : '' }}>
                                    Tarjeta débito
                                </option>

                                <option value="Tarjeta crédito"
                                    {{ old('metodo_pago', $venta->metodo_pago) == 'Tarjeta crédito' ? 'selected' : '' }}>
                                    Tarjeta crédito
                                </option>

                                <option value="Transferencia"
                                    {{ old('metodo_pago', $venta->metodo_pago) == 'Transferencia' ? 'selected' : '' }}>
                                    Transferencia
                                </option>

                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Estatus</label>
                            <select class="form-control rounded-3" name="estatus" required>

                                <option value="Pagada"
                                    {{ old('estatus', $venta->estatus) == 'Pagada' ? 'selected' : '' }}>
                                    Pagada
                                </option>

                                <option value="En Proceso"
                                    {{ old('estatus', $venta->estatus) == 'En Proceso' ? 'selected' : '' }}>
                                    En proceso
                                </option>

                                <option value="Cancelada"
                                    {{ old('estatus', $venta->estatus) == 'Cancelada' ? 'selected' : '' }}>
                                    Cancelada
                                </option>

                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Subtotal</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   name="subtotal"
                                   value="{{ old('subtotal', $venta->subtotal) }}" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Descuento</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   name="descuento"
                                   value="{{ old('descuento', $venta->descuento) }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Impuesto</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   name="impuesto"
                                   value="{{ old('impuesto', $venta->impuesto) }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Total</label>
                            <input type="number" step="0.01" class="form-control rounded-3"
                                   name="total"
                                   value="{{ old('total', $venta->total) }}" required>
                        </div>

                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-center gap-3 mt-5">
                        <button type="submit" class="btn btn-success px-4 py-2 rounded-3 shadow-sm">
                            Guardar Cambios
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