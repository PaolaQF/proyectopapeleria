<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Datos de cada Prodcuto </h1>

        <p>
            ID : {{$producto->id}}
        </p>

        <p>
            ID PROVEEDOR : {{$producto->proveedor_id}}
        </p>

        <p>
            CATEGORIA : {{$producto->categoria}}
        </p>

        <p>
            CODIGO DE BARRAS : {{$producto->codigo_barras}}
        </p>

        <p>
            NOMBRE : {{$producto->nombre}}
        </p>

        <p>
            DESCRIPCION : {{$producto->descripcion}}
        </p>

        <p>
            MARCA : {{$producto->marca}}
        </p>

        <p>
            UNIDAD DE MEDIDA : {{$producto->unidad_medida}}
        </p>

        <p>
            COSTO : {{$producto->costo}}
        </p>

        <p>
            PRECIO : {{$producto->precio}}
        </p>

        <p>
            STOCK : {{$producto->stock}}
        </p>

        <p>
            STOCK MINIMO : {{$producto->stock_minimo}}
        </p>

        <p>
            FECHA DE CADUCIDAD : {{$producto->fecha_caducidad}}
        </p>

        <p>
            ACTIVO : {{$producto->activo}}
        </p>
                

   

<!-- `    <a href="/listamedicinas"> Volver</a>` -->

    <a href="{{route('productos.index') }}">Volver</a>


</body>
</html>