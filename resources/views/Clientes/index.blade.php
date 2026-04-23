<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>

    <h1>PÁGINA DE CLIENTES</h1>

    <a href="{{ route('clientes.create') }}">Nuevo Cliente</a>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Calle</th>
            <th>Número</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>Fecha Registro</th>
            <th>Puntos</th>
            <th>Acciones</th>
        </tr>

        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->apellido_paterno }}</td>
            <td>{{ $cliente->apellido_materno }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->email }}</td>
            <td>{{ $cliente->calle }}</td>
            <td>{{ $cliente->numero }}</td>
            <td>{{ $cliente->colonia }}</td>
            <td>{{ $cliente->ciudad }}</td>
            <td>{{ $cliente->fecha_registro }}</td>
            <td>{{ $cliente->puntos }}</td>

            <td>

                <a href="{{ route('clientes.show', $cliente->id) }}">Mostrar</a>

                <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>

                <form method="POST" action="{{ route('clientes.destroy', $cliente->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar</button>
                </form>

            </td>
        </tr>
        @endforeach

    </table>

</body>
</html>