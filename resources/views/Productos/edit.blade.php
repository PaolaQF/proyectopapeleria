<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UN NUEVO PRODUCTO</h1>
        <form id="formulario"  method= "POST" action="{{route ('productos.update', $producto->id_producto)}}" >
             @csrf
             @method('PUT')
             
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text"  id="nombre" value="{{$producto->nombre}}" name="nombre">
            </div>

            <div>
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion"  value="{{$producto->descripcion}}"  name="descripcion">
            </div>

            <div>
                <label for="precio">Precio:</label>
                <input type="text" id="precio"  value="{{$producto->precio}}"name="precio" >
            </div>

            <div>
                <label for="stock">Stock:</label>
                <input type="text" id="stock"  value="{{$producto->stock}}"name="stock" >
            </div>

             <div>
                <label for="marca">Marca:</label>
                <input type="text" id="marca"  value="{{$producto->marca}}"name="marca" >
            </div>

             <div>
                <label for="codigo_barras">Codigo De Barras:</label>
                <input type="text" id="codigo_barras"  value="{{$producto->codigo_barras}}"name="codigo_barras" >
            </div>



             <div>
                <label for="id_categoria">Id de Categoria:</label>
                <input type="text" id="id_categoria"  value="{{$producto->id_categoria}}"name="id_categoria" >
            </div>

             <div>
                <label for="id_proveedor">Id De Proveedor:</label>
                <input type="text" id="id_proveedor"  value="{{$producto->id_proveedor}}"name="id_proveedor" >
            </div>


           

            <div>
                <label for="fecha_registro">Fecha De Registro:</label>
                <input type="text" id="fecha_registro"  value="{{$producto->fecha_registro}}"name="fecha_registro" >
            </div>
            
            <div>
                <label for="estado">Estado</label>
                <input type="text" id="estado"  value="{{$producto->estado}}"name="estado" >
            </div>






            <div>
                <button type="submit">GUARDAR</button>
                <button href="{{route('productos.index')}}">Volver</button>


            </div>

            
        </form>
    </div>
</body>
</html>