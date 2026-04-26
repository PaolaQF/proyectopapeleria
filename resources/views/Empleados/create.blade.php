<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Empleado</title>
</head>
<body>

<h1>Crear Nuevo Empleado</h1>

<form method="POST" action="{{ route('empleados.store') }}">
    @csrf

    <label>ID:</label>
    <input type="number" name="id"><br>

    <label>ID Sucursal:</label>
    <input type="number" name="sucursal_id"><br>

    <label>Nombre:</label>
    <input type="text" name="nombre"><br>

    <label>Apellido Paterno:</label>
    <input type="text" name="apellido_paterno"><br>

    <label>Apellido Materno:</label>
    <input type="text" name="apellido_materno"><br>

    <label>Puesto:</label>
    <input type="text" name="puesto"><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <label>Fecha Ingreso:</label>
    <input type="date" name="fecha_ingreso"><br>

    <label>Salario:</label>
    <input type="text" name="salario"><br>

    <label>Turno:</label>
    <input type="text" name="turno"><br>

    <label>Estatus:</label>
    <input type="text" name="estatus"><br>

    <button type="submit">Guardar</button>
</form>

<a href="{{ route('empleados.index') }}">Volver</a>

</body>
</html>