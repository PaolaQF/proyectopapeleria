@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- titulo que se le asigno -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Clientes</h2>

        <!-- boton para dar  de alta  un nuevo cliente -->
        <a href="{{ route('clientes.create') }}" class="btn btn-dark">
            + Nuevo
        </a>
    </div>

    <!-- TABLA con info referente a clientes-->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">

            <!-- ENCABEZADO -->
            <thead style="background-color:#F5A2BE; color:#222;">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido P</th>
                    <th>Apellido M</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Calle</th>
                    <th>Número</th>
                    <th>Colonia</th>
                    <th>Ciudad</th>
                    <th>Fecha Registro</th>
                    <th>Puntos</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($clientes as $cliente)
                <tr>

                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->apellido_paterno }}</td>
                    <td>{{ $cliente->apellido_materno }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->calle }}</td>
                    <td>{{ $cliente->numero }}</td>
                    <td>{{ $cliente->colonia }}</td>
                    <td>{{ $cliente->ciudad }}</td>
                    <td>{{ $cliente->fecha_registro }}</td>
                    <td>{{ $cliente->puntos }}</td>

                    <!-- ACCIONES ( botones ver,editar y borrar)-->
                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-info">
                                Ver
                            </a>

                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <form method="POST" action="{{ route('clientes.delete', $cliente->id) }}">
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