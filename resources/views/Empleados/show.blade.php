<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Empleado</title>
</head>
<body>

<h1>Datos del Empleado</h1>

<p>ID: {{ $empleado->id }}</p>
<p>ID Sucursal: {{ $empleado->sucursal_id }}</p>
<p>Nombre: {{ $empleado->nombre }}</p>
<p>Apellido Paterno: {{ $empleado->apellido_paterno }}</p>
<p>Apellido Materno: {{ $empleado->apellido_materno }}</p>
<p>Puesto: {{ $empleado->puesto }}</p>
<p>Teléfono: {{ $empleado->telefono }}</p>
<p>Email: {{ $empleado->email }}</p>
<p>Fecha Ingreso: {{ $empleado->fecha_ingreso }}</p>
<p>Salario: {{ $empleado->salario }}</p>
<p>Turno: {{ $empleado->turno }}</p>
<p>Estatus: {{ $empleado->estatus }}</p>

<a href="{{ route('empleados.index') }}">Volver</a>

</body>
</html>