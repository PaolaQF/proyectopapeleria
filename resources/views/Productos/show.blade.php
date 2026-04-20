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
        ID_PRODUCTO : {{$producto-> id_producto}}
    </p>

    <p>
        NOMBRE : {{$producto-> nombre}}
    </p>

     <p>
        DESCRIPCION : {{$producto-> descripcion}}
    </p>

    <p>
        PRECIO : {{$producto-> precio}}
    </p>
      
    <p>
        STOCK : {{$producto-> stock}}
    </p>
      
     <p>
        MARCA : {{$producto-> marca}}
    </p>

     <p>
        CODIGO DE BARRAS : {{$producto-> codigo_barras}}
    </p>

     <p>
        ID DE CATEGORIA  : {{$producto-> id_categoria}}
    </p>



    <p>
        ID DEL PROVEDOR  : {{$producto-> id_proveedor}}
    </p>

    <p>
        FECHA DE REGISTRO : {{$producto-> fecha_registro}}
    </p>

    <p>
        ESTADO : {{$producto-> estado}}
    </p>
      
      
      
            
                

   

<!-- `    <a href="/listamedicinas"> Volver</a>` -->

    <a href="{{route('productos.index') }}">Volver</a>


</body>
</html>