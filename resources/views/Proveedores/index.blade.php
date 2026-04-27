@extends('layouts.app')
@section('content')

<div class="main-card">

    <!-- titulo -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Proveedores</h2>

        <!-- boton nuevo -->
        <a href="{{ route('proveedores.create') }}" class="btn btn-dark">
            + Nuevo </a>
    </div>
     
    <!-- TABLA -->
    <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center">

            <!-- ENCABEZADO -->
            <thead style="background-color:#F5A2BE; color:#222;">

                <tr>
                    <th>ID</th>
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

            </thead>
                <tbody>

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
        



         <!-- ACCIONES -->
                   <td>
    <div class="d-flex justify-content-center gap-2">
        
        <a href="{{ route('proveedores.show', $proveedor->id) }}" class="btn btn-sm btn-info">
            Ver
        </a>

        <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="btn btn-sm btn-warning">
            Editar
        </a>

        <form method="POST" action="{{ route('proveedores.delete', $proveedor->id) }}">
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