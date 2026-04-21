<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Cliente</title>
</head>
<body>

    <h1>DATOS DEL CLIENTE</h1>

    <p>ID_CLIENTE: {{ $cliente->id_cliente }}</p>

    <p>NOMBRE: {{ $cliente->nombre }}</p>

    <p>APELLIDO PATERNO: {{ $cliente->apellido_paterno }}</p>

    <p>APELLIDO MATERNO: {{ $cliente->apellido_materno }}</p>

    <p>TELEFONO: {{ $cliente->telefono }}</p>

    <p>CORREO: {{ $cliente->correo }}</p>

    <p>DIRECCION: {{ $cliente->direccion }}</p>

    <p>TIPO DE CLIENTE: {{ $cliente->tipo_cliente }}</p>

    <p>ESTADO: {{ $cliente->estado }}</p>

    <p>FECHA DE REGISTRO: {{ $cliente->fecha_registro }}</p>

    <br>

    <a href="{{ route('clientes.index') }}">Volver</a>

</body>
</html>