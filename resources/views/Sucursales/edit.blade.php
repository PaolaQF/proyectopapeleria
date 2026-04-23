<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Sucursal</title>
</head>
<body>
    <div class="container">
        <h1>EDITAR SUCURSAL</h1>

        <form method="POST" action="{{route('sucursales.update', $sucursal->id)}}">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{$sucursal->nombre}}">
            </div>

            <div>
                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono" value="{{$sucursal->telefono}}">
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{$sucursal->email}}">
            </div>

            <div>
                <label for="calle">Calle:</label>
                <input type="text" id="calle" name="calle" value="{{$sucursal->calle}}">
            </div>

            <div>
                <label for="numero">Número:</label>
                <input type="number" id="numero" name="numero" value="{{$sucursal->numero}}">
            </div>

            <div>
                <label for="colonia">Colonia:</label>
                <input type="text" id="colonia" name="colonia" value="{{$sucursal->colonia}}">
            </div>

            <div>
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" value="{{$sucursal->ciudad}}">
            </div>

            <div>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="{{$sucursal->estado}}">
            </div>

            <div>
                <label for="codigo_postal">Código Postal:</label>
                <input type="number" id="codigo_postal" name="codigo_postal" value="{{$sucursal->codigo_postal}}">
            </div>

            <div>
                <label for="fecha_apertura">Fecha de Apertura:</label>
                <input type="date" id="fecha_apertura" name="fecha_apertura" value="{{$sucursal->fecha_apertura}}">
            </div>

            <div>
                <label for="activa">Activa:</label>
                 <select id="activa" name="activa">
                    <option value="1" {{$sucursal->activa == 1 ? 'selected' : ''}}>Sí</option>
                    <option value="0" {{$sucursal->activa == 0 ? 'selected' : ''}}>No</option>
                </select>
            </div>

            <div>
                <button type="submit">GUARDAR</button>
                <a href="{{route('sucursales.index')}}">Volver</a>
            </div>

        </form>
    </div>
</body>
</html>