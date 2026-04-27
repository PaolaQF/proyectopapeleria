@extends('layouts.app')
@section('content')

<div class="main-card">

    <!-- titulo -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Sucursales</h2>

        <!-- boton nuevo -->
        <a href="{{ route('sucursales.create') }}" class="btn btn-dark">
            + Nuevo </a>
    </div>
     
    <!-- TABLA -->
    <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">

            <!-- ENCABEZADO -->
            <thead style="background-color:#F5A2BE; color:#222;">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Calle</th>
            <th>Número</th>
            <th>Colonia</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Código Postal</th>
            <th>Fecha de Apertura</th>
            <th>Activa</th>
            <th>Actividades</th>
        </tr>
        </thead>

        <tbody>

        @foreach($sucursales as $sucursal)
        <tr>
            <td>{{ $sucursal->id }}</td>
            <td>{{ $sucursal->nombre }}</td>
            <td>{{ $sucursal->telefono }}</td>
            <td>{{ $sucursal->email }}</td>
            <td>{{ $sucursal->calle }}</td>
            <td>{{ $sucursal->numero }}</td>
            <td>{{ $sucursal->colonia }}</td>
            <td>{{ $sucursal->ciudad }}</td>
            <td>{{ $sucursal->estado }}</td>
            <td>{{ $sucursal->codigo_postal }}</td>
            <td>{{ $sucursal->fecha_apertura }}</td>
            <td>{{ $sucursal->activa }}</td>

         <!-- ACCIONES -->
                   <td>
    <div class="d-flex justify-content-center gap-2">
        
        <a href="{{ route('sucursales.show', $sucursal->id) }}" class="btn btn-sm btn-info">
            Ver
        </a>

        <a href="{{ route('sucursales.edit', $sucursal->id) }}" class="btn btn-sm btn-warning">
            Editar
        </a>

        <form method="POST" action="{{ route('sucursales.delete', $sucursal->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-sm btn-danger">
                Borrar
            </button>
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