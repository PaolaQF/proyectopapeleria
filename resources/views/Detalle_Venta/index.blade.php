@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- titulo -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="seccion-titulo m-0">Detalles de Ventas</h2>

        <!-- boton nuevo -->
        <a href="{{ route('detalle_venta.create') }}" class="btn btn-dark">
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
                     <th>ID Venta</th>
                     <th>ID Producto</th>
                     <th>Cantidad</th>
                     <th>Precio Unitario</th>
                     <th>Descuento</th>
                     <th>Impuesto</th>
                     <th>Subtotal</th>
                     <th>Observaciones</th>
                     <th>Entregado</th>
                </tr>
            </thead>

            <!-- CUERPO -->
            <tbody>
                @foreach($Detalle_Venta as $DetVent)
                <tr>
                    <td>{{$DetVent->id}}</td>
                    <td>{{$DetVent->venta_id}}</td>
                    <td>{{$DetVent->producto_id}}</td>
                    <td>{{$DetVent->cantidad}}</td>
                    <td>{{$DetVent->precio_unitario}}</td>
                    <td>{{$DetVent->descuento}}</td>
                    <td>{{$DetVent->impuesto}}</td>
                    <td>{{$DetVent->subtotal}}</td>
                    <td>{{$DetVent->observaciones}}</td>
                    <td>{{$DetVent->entregado}}</td>
            
                    <!-- ACCIONES -->
                   <td>
    <div class="d-flex justify-content-center gap-2">
        
        <a href="{{ route('detalle_venta.show', $DetVent->id) }}" class="btn btn-sm btn-info">
            Ver
        </a>

        <a href="{{ route('detalle_venta.edit', $DetVent->id) }}" class="btn btn-sm btn-warning">
            Editar
        </a>

        <form method="POST" action="{{ route('detalle_venta.delete', $DetVent->id) }}">
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

            