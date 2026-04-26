<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Proveedor</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UN NUEVO PROVEEDOR</h1>
        <form id="formulario" method="post" action="{{ route('proveedores.store') }}" >
            @csrf     
            <div>
                <label for="nombre_comercial">Nombre de Comercial:</label>
                <input type="text"  id="nombre_comercial" name="nombre_comercial" >
            </div>
            <div>
                <label for="contacto_nombre">Nombre del Contacto:</label>
                <input type="text" id="contacto_nombre"   name="contacto_nombre" >
            </div>
            <div>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono"   name="telefono" >
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text"  id="email" name="email" >
            </div>
            <div>
                <label for="calle">Calle:</label>
                <input type="text"  id="calle" name="calle" >
            </div>
            <div>
                <label for="numero">Numero:</label>
                <input type="text"  id="numero" name="numero" >
            </div>
            <div>
                <label for="colonia">Colonia:</label>
                <input type="text"  id="colonia" name="colonia" >
            </div>
            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text"  id="ciudad" name="ciudad" >
            </div>
            <div>
                <label for="rfc">RFC:</label>
                <input type="text"  id="rfc" name="rfc" >
            </div>
            <div>
                <label for="dias_credito">Dias de Credito:</label>
                <input type="text"  id="dias_credito" name="dias_credito" >
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