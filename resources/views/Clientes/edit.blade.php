<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>

    <h1>EDITAR CLIENTE</h1>

    <form method="POST" action="{{ route('clientes.update', $cliente->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $cliente->nombre }}">
        </div>

        <div>
            <label>Apellido Paterno:</label>
            <input type="text" name="apellido_paterno" value="{{ $cliente->apellido_paterno }}">
        </div>

        <div>
            <label>Apellido Materno:</label>
            <input type="text" name="apellido_materno" value="{{ $cliente->apellido_materno }}">
        </div>

        <div>
            <label>Teléfono:</label>
            <input type="number" name="telefono" value="{{ $cliente->telefono }}">
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $cliente->email }}">
        </div>

        <div>
            <label>Calle:</label>
            <input type="text" name="calle" value="{{ $cliente->calle }}">
        </div>

        <div>
            <label>Número:</label>
            <input type="number" name="numero" value="{{ $cliente->numero }}">
        </div>

        <div>
            <label>Colonia:</label>
            <input type="text" name="colonia" value="{{ $cliente->colonia }}">
        </div>

        <div>
            <label>Ciudad:</label>
            <input type="text" name="ciudad" value="{{ $cliente->ciudad }}">
        </div>

        <div>
            <label>Fecha de Registro:</label>
            <input type="date" name="fecha_registro" value="{{ $cliente->fecha_registro }}">
        </div>

        <div>
            <label>Puntos:</label>
            <input type="number" name="puntos" value="{{ $cliente->puntos }}">
        </div>

        <br>

        <button type="submit">GUARDAR</button>

        <a href="{{ route('clientes.index') }}">
            <button type="button">Volver</button>
        </a>

    </form>

</body>
</html>