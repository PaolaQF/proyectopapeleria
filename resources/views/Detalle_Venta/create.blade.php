<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Detalle de Venta</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UN NUEVO DETALLE DE VENTA</h1>
        <form id="formulario" method= "POST" action="{{route ('detalle_venta.store')}}" >
             @csrf


          

            <div>
                <label for="venta_id">ID de Venta:</label>
                <input type="text" id="venta_id"   name="venta_id">
            </div>

            <div>
                <label for="producto_id">ID de Producto:</label>
                <input type="text" id="producto_id"   name="producto_id">
            </div>

            <div>
                <label for="cantidad">Cantidad:</label>
                <input type="text" id="cantidad"  name="cantidad" >
            </div>

             <div>
                <label for="precio_unitario">Precio Unitario:</label>
                <input type="text" id="precio_unitario"  name="precio_unitario" >
            </div>

            <div>
                <label for="descuento">Descuento:</label>
                <input type="text" id="descuento"  name="descuento" >
            </div>

            <div>
                <label for="impuesto">Impuesto:</label>
                <input type="text" id="impuesto"  name="impuesto" >
            </div>

             <div>
                <label for="subtotal">Subtotal:</label>
                <input type="text" id="subtotal"  name="subtotal" >
            </div>

            <div>
                <label for="observaciones">Observaciones:</label>
                <input type="text" id="observaciones"  name="observaciones" >
            </div>

            
            <div>
                <label for="entregado">Entregado:</label>
                <select id="entregado" name="entregado">
                    <option value="1" {{old('entregado', 1) == 1 ? 'selected' : ''}}>Sí</option>
                    <option value="0" {{old('entregado', 1) == 0 ? 'selected' : ''}}>No</option>
                </select>
            </div>

            <div>
                <button type="submit">Guardar</button>
                <button href="{{route('detalle_venta.index') }}">Volver</button>
            </div>
            
        </form>
    </div>
</body>
</html>

            

