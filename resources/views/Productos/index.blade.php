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
     
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock </th>
            <th>Marca</th>
            <th>Codigo De Barra</th>
            <th>Id De Categoria</th>
            <th>Id De Proverdor</th>
            <th>Fecha De Regristo</th>
            <th>Estado</th>
            <th> Actividad </th>

        </tr>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id_producto }}</td>
            <td>{{$producto->nombre }}</td>
            <td>{{$producto->descripcion }}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock }}</td>
            <td>{{$producto->marca }}</td>
            <td>{{$producto->codigo_barras }}</td>
            <td>{{$producto->id_categoria }}</td>
            <td>{{$producto->id_proveedor }}</td>
            <td>{{$producto->fecha_registro }}</td>
            <td>{{$producto->estado }}</td>
            
            <td> <a href="{{route('productos.show', $producto->id_producto)}}">Mostrar</a>
             <td> <a href="{{route('productos.edit', $producto->id_producto)}}">Editar</a>


              <form  method="POST" action="{{ route('productos.delete', $producto->id_producto)  }}" >
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