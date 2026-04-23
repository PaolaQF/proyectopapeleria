<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Cliente</title>
</head>
<body>

    <h1>DATOS DEL CLIENTE</h1>

    <p>ID: {{ $cliente->id }}</p>

    <p>NOMBRE: {{ $cliente->nombre }}</p>

    <p>APELLIDO PATERNO: {{ $cliente->apellido_paterno }}</p>

    <p>APELLIDO MATERNO: {{ $cliente->apellido_materno }}</p>

    <p>TELEFONO: {{ $cliente->telefono }}</p>

    <p>EMAIL: {{ $cliente->email }}</p>

    <p>CALLE: {{ $cliente->calle }}</p>

    <p>NÚMERO: {{ $cliente->numero }}</p>

    <p>COLONIA: {{ $cliente->colonia }}</p>

    <p>CIUDAD: {{ $cliente->ciudad }}</p>

    <p>FECHA DE REGISTRO: {{ $cliente->fecha_registro }}</p>

    <p>PUNTOS: {{ $cliente->puntos }}</p>

    <a href="{{ route('clientes.index') }}">Volver</a>

</body>
</html>