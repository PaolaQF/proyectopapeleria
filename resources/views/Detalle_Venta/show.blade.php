<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Datos de cada Detalle de Venta </h1>

        <p>
            ID : {{$DetVent->id}}
        </p>

        <p>
            ID VENTA : {{$DetVent->venta_id}}
        </p>

        <p>
            ID PRODUCTO : {{$DetVent->producto_id}}
        </p>

        <p>
            CANTIDAD : {{$DetVent->cantidad}}
        </p>

        <p>
            PRECIO UNITARIO: {{$DetVent->precio_unitario}}
        </p>

        <p>
            DESCUENTO : {{$DetVent->descuento}}
        </p>

        <p>
            IMPUESTO : {{$DetVent->impuesto}}
        </p>

        <p>
            SUBTOTAL : {{$DetVent->subtotal}}
        </p>

        <p>
            OBSERVACIONES : {{$DetVent->observaciones}}
        </p>

        <p>
            ENTREGADO : {{$DetVent->entregado}}
        </p>



    <a href="{{route('detalle_venta.index') }}">Volver</a>


</body>
</html>