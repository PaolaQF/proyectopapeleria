<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
</head>
<body>

    <h1>EDITAR CLIENTE</h1>

    <form method="POST" action="{{ route('clientes.update', $cliente->id_cliente) }}">
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
            <input type="text" name="telefono" value="{{ $cliente->telefono }}">
        </div>

        <div>
            <label>Correo:</label>
            <input type="email" name="correo" value="{{ $cliente->correo }}">
        </div>

        <div>
            <label>Dirección:</label>
            <input type="text" name="direccion" value="{{ $cliente->direccion }}">
        </div>

        <div>
            <label>Tipo de Cliente:</label>
            <input type="text" name="tipo_cliente" value="{{ $cliente->tipo_cliente }}">
        </div>

        <div>
            <label>Estado:</label>
            <input type="text" name="estado" value="{{ $cliente->estado }}">
        </div>

        <div>
            <label>Fecha de Registro:</label>
            <input type="date" name="fecha_registro" value="{{ $cliente->fecha_registro }}">
        </div>

        <br>

        <button type="submit">GUARDAR</button>

        <a href="{{ route('clientes.index') }}">
            <button type="button">Volver</button>
        </a>

    </form>

</body>
</html>