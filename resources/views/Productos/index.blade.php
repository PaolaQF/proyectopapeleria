@extends('layouts.app')
@section('content')

<div class="main-card">

    <!-- titulo -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Productos </h2>
             <!-- boton nuevo -->
        <a href="{{ route('productos.create') }}" class="btn btn-dark">  + Nuevo </a>
    </div>
     
    <!-- TABLA -->
    <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">

            <!-- ENCABEZADO -->
            <thead style="background-color:#F5A2BE; color:#222;">
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

         </thead>
        <!-- CUERPO -->
     <tbody>
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
            
             <!-- ACCIONES -->
                   <td>
            <div class="d-flex justify-content-center gap-2">
            <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-sm btn-info"> Ver </a>
            <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-warning"> Editar </a>

        <form method="POST" action="{{ route('productos.delete', $producto->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">  Borrar </button>
        </form>

    </div>
</td>

                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection
