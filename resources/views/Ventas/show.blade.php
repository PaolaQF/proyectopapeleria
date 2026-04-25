<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
       Datos ventas
    </h1>

    <p>
        ID : {{ $venta->id }}
    </p>

    <p>
        Id de Sucursal: {{ $venta->sucursal_id }}
    </p>
        
    <p>
        Id del Empleado: {{ $venta->empleado_id }}
    </p>

    <p>
        Id del Clliente: {{ $venta->cliente_id }}
    </p>

    <p>
        Folio: {{ $venta->folio }}
    </p>

    <p>
        Fecha  de Venta: {{ $venta->fecha_venta }}
    </p>

    <p>
        Metodo  de Pago: {{ $venta->metodo_pago }}
    </p>

    <p>
        Subtotal: {{ $venta->subtotal }}
    </p>

    <p>
        Descuento: {{ $venta->descuento }}
    </p>

    <p>
        Impuesto: {{ $venta->impuesto }}
    </p>

    <p>
        Total: {{ $venta->total }}
    </p>

    <p>
        Estatus: {{ $venta->estatus }}
    </p>

    
    <a href="{{ route('ventas.index') }}"> Volver </a>

</body>
</html>