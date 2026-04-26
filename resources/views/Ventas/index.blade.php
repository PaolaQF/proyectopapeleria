<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Pagina de ventas </h1>
    <a href='{{ route('ventas.create') }}'> Nuevo </a>
    <table border='1'>
        <tr>
            <th>Id</th>
            <th>Id de la Sucursal</th>
            <th>Id del Empleado</th>
            <th>Id del Cliente</th>
            <th>Folio</th>
            <th>Fecha de Venta</th>
            <th>Metodo de Pago</th>
            <th>Subtotal</th>
            <th>Descuento</th>
            <th>Impuesto</th>
            <th>Total</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach ($ventas as $venta)
        <tr>
            <td>{{ $venta->id }}</td>
            <td>{{ $venta->sucursal_id }}</td>
            <td>{{ $venta->empleado_id }}</td>
            <td>{{ $venta->cliente_id }}</td>
            <td>{{ $venta->folio }}</td>
            <td>{{ $venta->fecha_venta }}</td>
            <td>{{ $venta->metodo_pago }}</td>
            <td>{{ $venta->subtotal }}</td>
            <td>{{ $venta->descuento }}</td>
            <td>{{ $venta->impuesto }}</td>
            <td>{{ $venta->total }}</td>
            <td>{{ $venta->estatus }}</td>
            <td><a href='{{ route('ventas.show', $venta->id)}}'> Mostrar </a>
                <a href='{{ route('ventas.edit', $venta->id)}}'>   Editar </a>
                <form  method="POST" action="{{ route('ventas.delete',$venta->id )}}" >
                    @csrf
                    @method('DELETE')
                    <button type="submit"> Borrar </button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>

    
</body>
</html>