@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- Título -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Ventas</h2>

        <!-- Botón nuevo -->
        <a href="{{ route('ventas.create') }}" class="btn btn-dark">
            + Nuevo
        </a>
    </div>

    <!-- TABLA -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">

            <!-- ENCABEZADO -->
            <thead style="background-color:#F5A2BE; color:#222;">
                <tr>
                    <th>ID</th>
                    <th>Sucursal</th>
                    <th>Empleado</th>
                    <th>Cliente</th>
                    <th>Folio</th>
                    <th>Fecha</th>
                    <th>Método</th>
                    <th>Subtotal</th>
                    <th>Descuento</th>
                    <th>Impuesto</th>
                    <th>Total</th>
                    <th>Estatus</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->sucursal_id }}</td>
                    <td>{{ $venta->empleado_id }}</td>
                    <td>{{ $venta->cliente_id }}</td>
                    <td>{{ $venta->folio }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                    <td>{{ $venta->metodo_pago }}</td>
                    <td>${{ $venta->subtotal }}</td>
                    <td>${{ $venta->descuento }}</td>
                    <td>${{ $venta->impuesto }}</td>
                    <td><strong>${{ $venta->total }}</strong></td>
                    <td>{{ $venta->estatus }}</td>

                    <!-- ACCIONES -->
                    <td>
                        <div class="d-flex justify-content-center gap-2">

                            <a href="{{ route('ventas.show', $venta->id) }}" class="btn btn-sm btn-info">
                                Ver
                            </a>

                            <a href="{{ route('ventas.edit', $venta->id) }}" class="btn btn-sm btn-warning">
                                Editar
                            </a>

                            <form method="POST" action="{{ route('ventas.delete', $venta->id) }}">
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