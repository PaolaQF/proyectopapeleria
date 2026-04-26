<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina de Detalles de Ventas</h1>
      <a href="{{route('detalle_venta.create') }}">Nuevo</a>
     
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Venta</th>
            <th>ID Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Descuento</th>
            <th>Impuesto</th>
            <th>Subtotal</th>
            <th>Observaciones</th>
            <th>Entregado</th>
            

        </tr>
        @foreach($Detalle_Venta as $DetVent)
        <tr>
            <td>{{$DetVent->id}}</td>
            <td>{{$DetVent->venta_id}}</td>
            <td>{{$DetVent->producto_id}}</td>
            <td>{{$DetVent->cantidad}}</td>
            <td>{{$DetVent->precio_unitario}}</td>
            <td>{{$DetVent->descuento}}</td>
            <td>{{$DetVent->impuesto}}</td>
            <td>{{$DetVent->subtotal}}</td>
            <td>{{$DetVent->observaciones}}</td>
            <td>{{$DetVent->entregado}}</td>
            
            
            <td> <a href="{{route('detalle_venta.show', $DetVent->id)}}">Mostrar</a>
             <td> <a href="{{route('detalle_venta.edit', $DetVent->id)}}">Editar</a>


              <form  method="POST" action="{{ route('detalle_venta.delete', $DetVent->id)  }}" >
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