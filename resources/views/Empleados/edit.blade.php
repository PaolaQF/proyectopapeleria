<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Empleado</title>
</head>
<body>

<h1>Editar Empleado</h1>

<form method="POST" action="{{ route('empleados.update', $empleado->id) }}">
    @csrf
    @method('PUT')

    <label>ID:</label>
    <input type="number" name="id" value="{{ $empleado->id }}"><br>

    <label>ID Sucursal:</label>
    <input type="number" name="sucursal_id" value="{{ $empleado->sucursal_id }}"><br>

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ $empleado->nombre }}"><br>

    <label>Apellido Paterno:</label>
    <input type="text" name="apellido_paterno" value="{{ $empleado->apellido_paterno }}"><br>

    <label>Apellido Materno:</label>
    <input type="text" name="apellido_materno" value="{{ $empleado->apellido_materno }}"><br>

    <label>Puesto:</label>
    <input type="text" name="puesto" value="{{ $empleado->puesto }}"><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="{{ $empleado->telefono }}"><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $empleado->email }}"><br>

    <label>Fecha Ingreso:</label>
    <input type="date" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}"><br>

    <label>Salario:</label>
    <input type="text" name="salario" value="{{ $empleado->salario }}"><br>

    <label>Turno:</label>
    <input type="text" name="turno" value="{{ $empleado->turno }}"><br>

    <label>Estatus:</label>
    <input type="text" name="estatus" value="{{ $empleado->estatus }}"><br>

    <button type="submit">Actualizar</button>
</form>

<a href="{{ route('empleados.index') }}">Volver</a>

</body>
</html>