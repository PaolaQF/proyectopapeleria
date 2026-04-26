<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar una Venta</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR UNA VENTA</h1>
        <form id="formulario" method="post" action="{{ route('ventas.update', $venta->id) }}" >
            @csrf
            @method('PUT')
            <div>
                <label for="sucursal_id">Id de la Sucursal:</label>
                <input type="number" min="1" step="1"  id="sucursal_id" value="{{ $venta->sucursal_id }}" name="sucursal_id" >
            </div>
            <div>
                <label for="empleado_id">Id del Empleado:</label>
                <input type="number" min="1" step="1" id="empleado_id" value="{{ $venta->empleado_id }}"  name="empleado_id" >
            </div>
            <div>
                <label for="cliente_id">Id del Cliente:</label>
                <input type="number" min="1" step="1" id="cliente_id" value="{{ $venta->cliente_id }}"  name="cliente_id" >
            </div>
            <div>
                <label for="folio">Folio:</label>
                <input type="text"  id="folio"  value="{{ $venta->folio }}" name="folio" 
                pattern="PAPE-[0-9]{5}" 
                placeholder="PAPE-00001" >
            </div>
            <div>
                <label for="fecha_venta">Fecha y Hora de Venta:</label>
                <input type="datetime-local" id="fecha_venta" 
                value="{{ \Carbon\Carbon::parse($venta->fecha_venta)->format('Y-m-d\TH:i') }}" 
                name="fecha_venta">
            </div>
            <div>
            <label for="metodo_pago">Método de Pago:</label>
            <select id="metodo_pago" name="metodo_pago" required>
                <option value="">Seleccione una opción</option>

                <option value="Efectivo" {{ $venta->metodo_pago == 'efectivo' ? 'selected' : '' }}>
                    Efectivo
                </option>

                <option value="Tarjeta debito" {{ $venta->metodo_pago == 'tarjeta_debito' ? 'selected' : '' }}>
                    Tarjeta de débito
                </option>

                <option value="Tarjeta crédito" {{ $venta->metodo_pago == 'tarjeta_credito' ? 'selected' : '' }}>
                    Tarjeta de crédito
                </option>

                <option value="Transferencia" {{ $venta->metodo_pago == 'transferencia' ? 'selected' : '' }}>
                    Transferencia
                </option>
            </select>
        </div>
            <div>
                <label for="subtotal">Subtotal:</label>
                <input type="number"  id="subtotal" value="{{ $venta->subtotal }}" name="subtotal" step="0.01" min="0" >
            </div>
            <div>
                <label for="descuento">Descuento:</label>
                <input type="number"  id="descuento" value="{{ $venta->descuento }}" name="descuento" step="0.01" min="0" >
            </div>
            <div>
                <label for="impuesto">Impuesto:</label>
                <input type="number"  id="impuesto" value="{{ $venta->impuesto }}" name="impuesto" step="0.01" min="0" >
            </div>
            <div>
                <label for="total">Total:</label>
                <input type="number"  id="total" value="{{ $venta->total }}" name="total" step="0.01" min="0">
            </div>
            <div>
                <label for="estatus">Estatus:</label>
                <select id="estatus" name="estatus" required>
                    <option value="">Seleccione una opción</option>

                    <option value="Pagada" {{ $venta->estatus == 'pagada' ? 'selected' : '' }}>
                        Pagada
                    </option>

                    <option value="En proceso" {{ $venta->estatus == 'en_proceso' ? 'selected' : '' }}>
                        En proceso
                    </option>

                    <option value="Cancelada" {{ $venta->estatus == 'cancelada' ? 'selected' : '' }}>
                        Cancelada
                    </option>
                </select>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>