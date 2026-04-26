<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Empleados</title>
</head>
<body>

<h1>Página de Empleados</h1>

<a href="{{ route('empleados.create') }}">Nuevo</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ID Sucursal</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Puesto</th>
        <th>Teléfono</th>
        <th>Email</th>
        <th>Fecha Ingreso</th>
        <th>Salario</th>
        <th>Turno</th>
        <th>Estatus</th>
        <th>Acciones</th>
    </tr>

    @foreach($empleados as $empleado)
    <tr>
        <td>{{ $empleado->id }}</td>
        <td>{{ $empleado->sucursal_id }}</td>
        <td>{{ $empleado->nombre }}</td>
        <td>{{ $empleado->apellido_paterno }}</td>
        <td>{{ $empleado->apellido_materno }}</td>
        <td>{{ $empleado->puesto }}</td>
        <td>{{ $empleado->telefono }}</td>
        <td>{{ $empleado->email }}</td>
        <td>{{ $empleado->fecha_ingreso }}</td>
        <td>{{ $empleado->salario }}</td>
        <td>{{ $empleado->turno }}</td>
        <td>{{ $empleado->estatus }}</td>

        <td>
            <a href="{{ route('empleados.show', $empleado->id) }}">Mostrar</a>
            <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>

            <form method="POST" action="{{ route('empleados.delete', $empleado->id) }}">
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