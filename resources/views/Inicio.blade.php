@extends('layouts.app')

@section('content')

<div class="main-card">

    <!-- ENCABEZADO -->
    <div class="text-center mb-2">

        <!-- LOGO GRANDE -->
        <img src="{{ asset('images/logo.png') }}" class="logo-grande">

        <!-- SUBTITULO -->
        <p class="subtitulo">Panel principal de administración</p>
    </div>

    <!-- OPERACIONES -->
    <h5 class="seccion-titulo">Operaciones</h5>

    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <a href="{{ route('ventas.index') }}" class="text-decoration-none">
                <div class="module-card ventas">
                    <h4>Ventas</h4>
                    <p>Gestionar ventas realizadas</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('productos.index') }}" class="text-decoration-none">
                <div class="module-card productos">
                    <h4>Productos</h4>
                    <p>Inventario y productos</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('proveedores.index') }}" class="text-decoration-none">
                <div class="module-card proveedores">
                    <h4>Proveedores</h4>
                    <p>Registro de proveedores</p>
                </div>
            </a>
        </div>

    </div>

    <!-- ADMINISTRACIÓN -->
    <h5 class="seccion-titulo">Administración</h5>

    <div class="row g-4">

        <div class="col-md-4">
            <a href="{{ route('clientes.index') }}" class="text-decoration-none">
                <div class="module-card clientes">
                    <h4>Clientes</h4>
                    <p>Datos de clientes</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('empleados.index') }}" class="text-decoration-none">
                <div class="module-card empleados">
                    <h4>Empleados</h4>
                    <p>Personal de la papelería</p>
                </div>
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('sucursales.index') }}" class="text-decoration-none">
                <div class="module-card sucursales">
                    <h4>Sucursales</h4>
                    <p>Ubicaciones disponibles</p>
                </div>
            </a>
        </div>

    </div>

</div>

@endsection