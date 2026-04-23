<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Sucursal</title>
</head>
<body>
    <div class="container">
        <h1>CREAR NUEVA SUCURSAL</h1>

        <form method="POST" action="{{route('sucursales.store')}}">
            @csrf

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>

            <div>
                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono">
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>

            <div>
                <label for="calle">Calle:</label>
                <input type="text" id="calle" name="calle">
            </div>

            <div>
                <label for="numero">Número:</label>
                <input type="number" id="numero" name="numero">
            </div>

            <div>
                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia">
            </div>

            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad">
            </div>

            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado">
            </div>

            <div>
                <label for="codigo_postal">Código Postal:</label>
                <input type="number" id="codigo_postal" name="codigo_postal">
            </div>

            <div>
                <label for="fecha_apertura">Fecha de Apertura:</label>
                <input type="date" id="fecha_apertura" name="fecha_apertura">
            </div>

            <div>
                <label for="activa">Activa:</label>
                <select id="activa" name="activa">
                    <option value="1" {{old('activa', 1) == 1 ? 'selected' : ''}}>Sí</option>
                    <option value="0" {{old('activa', 1) == 0 ? 'selected' : ''}}>No</option>
                </select>

            <div>
                <button type="submit">Guardar</button>
                <a href="{{route('sucursales.index')}}">Volver</a>
            </div>

        </form>
    </div>
</body>
</html>