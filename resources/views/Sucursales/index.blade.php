<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
</head>
<body>
    <h1>Pagina de Sucursales</h1>

    <a href="{{ route('sucursales.create') }}">Nuevo</a>
     
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Calle</th>
            <th>Número</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Código Postal</th>
            <th>Fecha de Apertura</th>
            <th>Activa</th>
            <th>Actividades</th>
        </tr>

        @foreach($sucursales as $sucursal)
        <tr>
            <td>{{ $sucursal->id }}</td>
            <td>{{ $sucursal->nombre }}</td>
            <td>{{ $sucursal->telefono }}</td>
            <td>{{ $sucursal->email }}</td>
            <td>{{ $sucursal->calle }}</td>
            <td>{{ $sucursal->numero }}</td>
            <td>{{ $sucursal->colonia }}</td>
            <td>{{ $sucursal->ciudad }}</td>
            <td>{{ $sucursal->estado }}</td>
            <td>{{ $sucursal->codigo_postal }}</td>
            <td>{{ $sucursal->fecha_apertura }}</td>
            <td>{{ $sucursal->activa }}</td>

            <td>
                <a href="{{ route('sucursales.show', $sucursal->id) }}">Mostrar</a>
                <a href="{{ route('sucursales.edit', $sucursal->id) }}">Editar</a>

                <form method="POST" action="{{ route('sucursales.delete', $sucursal->id) }}">
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