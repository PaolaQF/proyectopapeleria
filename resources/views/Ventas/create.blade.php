<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Venta</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UNA NUEVA VENTA</h1>
        <form id="formulario" method="post" action="{{ route('ventas.store') }}" >
            @csrf
            <div>
                <label for="sucursal_id">Id de la Sucursal:</label>
                <input type="number" id="sucursal_id" name="sucursal_id" min="1" step="1">
            </div>

            <div>
                <label for="empleado_id">Id del Empleado:</label>
                <input type="number" id="empleado_id" name="empleado_id" min="1" step="1">
            </div>

            <div>
                <label for="cliente_id">Id del Cliente:</label>
                <input type="number" id="cliente_id" name="cliente_id" min="1" step="1">
            </div>
            <div>
                <label for="folio">Folio:</label>
                <input type="text" id="folio" name="folio" 
                pattern="PAPE-[0-9]{5}" 
                placeholder="PAPE-00001" >
            </div>
            <div>
                <label for="fecha_venta">Fecha y Hora de Venta:</label>
                <input type="datetime-local" id="fecha_venta" 
                name="fecha_venta"
                value="{{ date('Y-m-d\TH:i') }}">
            </div>
            <div>
                <label for="metodo_pago">Método de Pago:</label>
                <select id="metodo_pago" name="metodo_pago" required>
                    <option value="">Seleccione...</option>
                    <option value="Efectivo">Efectivo</option>
                    <option value="Tarjeta débito">Tarjeta débito</option>
                    <option value="Tarjeta crédito">Tarjeta crédito</option>
                    <option value="Transferencia">Transferencia</option>
                </select>
            </div>
            <div>
                <label for="subtotal">Subtotal:</label>
                <input type="number" step="0.01"  id="subtotal" name="subtotal" >
            </div>
            <div>
                <label for="descuento">Descuento:</label>
                <input type="number" step="0.01"  id="descuento" name="descuento" >
            </div>
            <div>
                <label for="impuesto">Impuesto:</label>
                <input type="number" step="0.01"  id="impuesto" name="impuesto" >
            </div>
            <div>
                <label for="total">Total:</label>
                <input type="number" step="0.01"  id="total" name="total" >
            </div>
            <div>
                <label for="estatus">Estatus:</label>
                <select id="estatus" name="estatus" required>
                    <option value="">Seleccione...</option>
                    <option value="Pagada">Pagada</option>
                    <option value="En Proceso">En proceso</option>
                    <option value="Cancelada">Cancelada</option>
                </select>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>