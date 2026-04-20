<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Producto</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UN NUEVO PRODUCTO</h1>
        <form id="formulario" method= "POST" action="{{route ('productos.store')}}" >
             @csrf




            <div>
                <label for="nombre">Nombre:</label>
                <input type="text"  id="nombre"  name="nombre">
            </div>

            <div>
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion"   name="descripcion">
            </div>

            <div>
                <label for="precio">Precio:</label>
                <input type="text" id="precio"  name="precio" >
            </div>

            <div>
                <label for="stock">Stock:</label>
                <input type="text" id="stock" name="stock" >
            </div>

             <div>
                <label for="marca">Marca:</label>
                <input type="text" id="marca"   name="marca" >
            </div>

             <div>
                <label for="codigo_barras">Codigo De Barras:</label>
                <input type="text" id="codigo_barras"  name="codigo_barras" >
            </div>

             <div>
                <label for="id_categoria">Id de Categoria:</label>
                <input type="text" id="id_categoria" name="id_categoria" >
            </div>

            <div>
                <label for="id_proveedor">Id De Proveedor:</label>
                <input type="text" id="id_proveedor"  name="id_proveedor" >
            </div>



           

            <div>
                <label for="fecha_registro">Fecha De Registro:</label>
                <input type="text" id="fecha_registro" name="fecha_registro" >
            </div>
            
            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" >
            </div>











            <div>
                <button type="submit">Guardar</button>
                <button href="{{route('productos.index') }}">Volver</button>
            </div>
            
        </form>
    </div>
</body>
</html>