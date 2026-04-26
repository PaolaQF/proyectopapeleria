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
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" 
                    pattern="[0-9]{10}" 
                    maxlength="10"
                    placeholder="Ej: 8441234567"
                    required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email"  id="email" name="email" >
            </div>
            <div>
                <label for="calle">Calle:</label>
                <input type="text"  id="calle" name="calle" >
            </div>
            <div>
                <label for="numero">Numero:</label>
                <input type="numero"  id="numero" name="numero" >
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
                <input type="text" id="rfc" name="rfc"
                    maxlength="13"
                    pattern="[A-ZÑ&]{3,4}[0-9]{6}[A-Z0-9]{3}"
                    placeholder="Ej: ABC123456T78"
                    style="text-transform: uppercase;"
                    required>
            </div>
            <div>
                <label for="dias_credito">Dias de Credito:</label>
                <input type="number"  id="dias_credito" name="dias_credito" >
            </div>
            <div>
                <label for="estatus">Estatus:</label>
                <select id="estatus" name="estatus" required>
                    <option value="">Seleccione una opción</option>

                    <option value="activo">Activo</option>
                    <option value="suspendido">Suspendido</option>
                </select>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </div>
</body>
</html>