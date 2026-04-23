<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de Productos</h1>
      <a href="{{route('productos.create') }}">Nuevo</a>
     
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Proveedor</th>
            <th>Categoría</th>
            <th>Código de Barras</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Marca</th>
            <th>Unidad de Medida</th>
            <th>Costo</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Stock Mínimo</th>
            <th>Fecha de Caducidad</th>
            <th>Activo</th>
            <th>Actividades</th>

        </tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->proveedor_id}}</td>
            <td>{{$producto->categoria}}</td>
            <td>{{$producto->codigo_barras}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->marca}}</td>
            <td>{{$producto->unidad_medida}}</td>
            <td>{{$producto->costo}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            <td>{{$producto->stock_minimo}}</td>
            <td>{{$producto->fecha_caducidad}}</td>
            <td>{{$producto->activo}}</td>
            
            <td> <a href="{{route('productos.show', $producto->id)}}">Mostrar</a>
             <td> <a href="{{route('productos.edit', $producto->id)}}">Editar</a>


              <form  method="POST" action="{{ route('productos.delete', $producto->id)  }}" >
                @csrf
                @method('DELETE')
                <Button type="submit"> Borrar </Button>

                </form>
                
                
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>