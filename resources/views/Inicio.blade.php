<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Papeleria</h1>
    <!--Boton de clientes-->
    <button onclick="window.location='{{ route('clientes.index') }}'">
    Clientes
</button>
     <a href="{{route('clientes.index') }}">Clientes</a>

    <button onclick="window.location='{{ route('productos.index') }}'">
    Productos
</button>
     <a href="{{route('productos.index') }}">Productos</a>


      <button onclick="window.location='{{ route('sucursales.index') }}'">
    Sucursales
</button>
     <a href="{{route('productos.index') }}">sucursales</a>

      
     
     <a href="{{ route('empleados.index') }}">
      <button>Empleados</button></a>

    <a href="{{ route('empleados.index') }}">empleados</a>
     
    <!-- Ventas -->
    <button onclick="window.location='{{ route('ventas.index') }}'">
        Ventas
    </button>

    <!-- Proveedores -->
    <button onclick="window.location='{{ route('proveedores.index') }}'">
        Proveedores
    </button>

</body>
</html>