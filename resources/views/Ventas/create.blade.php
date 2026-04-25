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
                <input type="text"  id="sucursal_id" name="sucursal_id" >
            </div>
            <div>
                <label for="empleado_id">Id del Empleado:</label>
                <input type="text" id="empleado_id"   name="empleado_id" >
            </div>
            <div>
                <label for="cliente_id">Id del Cliente:</label>
                <input type="text" id="cliente_id"   name="cliente_id" >
            </div>
            <div>
                <label for="folio">Folio:</label>
                <input type="text"  id="folio" name="folio" >
            </div>
            <div>
                <label for="fecha_venta">Fecha de Venta:</label>
                <input type="text"  id="fecha_venta" name="fecha_venta" >
            </div>
            <div>
                <label for="metodo_pago">Metodo de Pago:</label>
                <input type="text"  id="metodo_pago" name="metodo_pago" >
            </div>
            <div>
                <label for="subtotal">Subtotal:</label>
                <input type="text"  id="subtotal" name="subtotal" >
            </div>
            <div>
                <label for="descuento">Descuento:</label>
                <input type="text"  id="descuento" name="descuento" >
            </div>
            <div>
                <label for="impuesto">Impuesto:</label>
                <input type="text"  id="impuesto" name="impuesto" >
            </div>
            <div>
                <label for="total">Total:</label>
                <input type="text"  id="total" name="total" >
            </div>
            <div>
                <label for="estatus">Estatus:</label>
                <input type="text"  id="estatus" name="estatus" >
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>