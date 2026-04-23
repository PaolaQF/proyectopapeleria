<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Sucursal</title>
</head>
<body>
    <h1>Datos de la Sucursal</h1>

        <p>
            ID: {{$sucursal->id}}
        </p>

        <p>
            Nombre: {{$sucursal->nombre}}
        </p>

        <p>
            Teléfono: {{$sucursal->telefono}}
        </p>

        <p>
            Email: {{$sucursal->email}}
        </p>

        <p>
            Calle: {{$sucursal->calle}}
        </p>

        <p>
            Número: {{$sucursal->numero}}
        </p>

        <p>
            Colonia: {{$sucursal->colonia}}
        </p>

        <p>
            Ciudad: {{$sucursal->ciudad}}
        </p>

        <p>
            Estado: {{$sucursal->estado}}
        </p>

        <p>
            Código Postal: {{$sucursal->codigo_postal}}
        </p>

        <p>
            Fecha de Apertura: {{$sucursal->fecha_apertura}}
        </p>

        <p>
            Activa: {{$sucursal->activa}}
        </p>

    <a href="{{route('sucursales.index')}}">Volver</a>

</body>
</html>