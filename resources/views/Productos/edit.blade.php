!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <div class="container">
        <h1>CREAR UN NUEVO PRODUCTO</h1>
        <form id="formulario"  method= "POST" action="{{route ('productos.update', $producto->id)}}" >
             @csrf
             @method('PUT')
           
             <div>
                <label for="proveedor_id">ID de Proveedor:</label>
                <input type="text" id="proveedor_id" value="{{$producto->proveedor_id}}" name="proveedor_id">
            </div>

            <div>
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" value="{{$producto->categoria}}" name="categoria">
            </div>

            <div>
                <label for="codigo_barras">Codigo De Barras:</label>
                <input type="text" id="codigo_barras" value="{{$producto->codigo_barras}}" name="codigo_barras">
            </div>

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" value="{{$producto->nombre}}" name="nombre">
            </div>

            <div>
                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" value="{{$producto->descripcion}}" name="descripcion">
            </div>

            <div>
                <label for="marca">Marca:</label>
                <input type="text" id="marca" value="{{$producto->marca}}" name="marca">
            </div>

            <div>
                <label for="unidad_medida">Unidad De Medida:</label>
                <input type="text" id="unidad_medida" value="{{$producto->unidad_medida}}" name="unidad_medida">
            </div>

            <div>
                <label for="costo">Costo:</label>
                <input type="number" step="0.01" id="costo" value="{{$producto->costo}}" name="costo">
            </div>

            <div>
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" id="precio" value="{{$producto->precio}}" name="precio">
            </div>

            <div>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" value="{{$producto->stock}}" name="stock">
            </div>

            <div>
                <label for="stock_minimo">Stock Minimo:</label>
                <input type="number" id="stock_minimo" value="{{$producto->stock_minimo}}" name="stock_minimo">
            </div>

            <div>
                <label for="fecha_caducidad">Fecha De Caducidad:</label>
                <input type="date" id="fecha_caducidad" value="{{$producto->fecha_caducidad}}" name="fecha_caducidad">
            </div>

            <div>
                <label for="activo">Activo:</label>
                <select id="activo" name="activo">
                    <option value="1" {{$producto->activo == 1 ? 'selected' : ''}}>Sí</option>
                    <option value="0" {{$producto->activo == 0 ? 'selected' : ''}}>No</option>
                </select>
                
            </div>

            
            <div>
                <button type="submit">GUARDAR</button>
                <button href="{{route('productos.index')}}">Volver</button>


            </div>

            
        </form>
    </div>
</body>
</html>