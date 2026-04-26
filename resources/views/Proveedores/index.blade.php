<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Pagina de proveedores </h1>
    <a href='{{ route('proveedores.create') }}'> Nuevo </a>
    <table border='1'>
        <tr>
            <th>Id</th>
            <th>Nombre del Comercial</th>
            <th>Nombre del Contacto</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>RFC</th>
            <th>Dias de Credito</th>
            <th>Estatus</th>
            <th>Acciones</th>
        </tr>
        @foreach ($proveedores as $proveedor)
        <tr>
            <td>{{ $proveedor->id }}</td>
            <td>{{ $proveedor->nombre_comercial }}</td>
            <td>{{ $proveedor->contacto_nombre }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td>{{ $proveedor->email }}</td>
            <td>{{ $proveedor->calle }}</td>
            <td>{{ $proveedor->numero }}</td>
            <td>{{ $proveedor->colonia }}</td>
            <td>{{ $proveedor->ciudad }}</td>
            <td>{{ $proveedor->rfc }}</td>
            <td>{{ $proveedor->dias_credito }}</td>
            <td>{{ $proveedor->estatus }}</td>
            <td><a href='{{ route('proveedores.show', $proveedor->id)}}'> Mostrar </a>
                <a href='{{ route('proveedores.edit', $proveedor->id)}}'>   Editar </a>
                <form  method="POST" action="{{ route('proveedores.delete',$proveedor->id )}}" >
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