<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelería</title>

    <!-- Bootstrap local -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        /* Fondo general */
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #FFD3DD, #C6E6E3);
            font-family: 'Segoe UI', sans-serif;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #F5A2BE;
        }

        .nav-link {
            color: #222;
            font-weight: 600;
        }

        .nav-link:hover {
            color: white;
        }

        /* Texto del navbar */
        .navbar-brand {
            font-weight: 800;
            font-size: 1.4rem;
        }

        /* Contenedor principal */
        .main-card {
            background-color: rgba(255, 255, 255, 0.78);
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.18);
            

            /* Encabezado rosa de formularios */
            .form-header {
                background: linear-gradient(135deg, #F5A2BE, #EC7FA9);
                color: white;
                padding: 28px;
                text-align: center;
            }

            .form-header h2 {
                color: white;
                font-weight: 800;
                margin: 0;
            }

            .form-header p {
                color: rgba(255, 255, 255, 0.9);
                margin: 8px 0 0 0;
                font-size: 0.95rem;
            }


        }

        /* Logo grande */
        .logo-grande {
            height: 400px;
            margin-bottom: 0;
        }

        /* Elimina espacios extra */
        .text-center img {
            margin-bottom: 0 !important;
        }

        .text-center p {
            margin: 0 !important;
        }

        .subtitulo {
            color: #555;
            font-weight: 500;
            margin-top: 0;
            margin-bottom: 10px;
        }

        /* Secciones */
        .seccion-titulo {
            font-weight: 800;
            color: #222;
            border-left: 7px solid #F5A2BE;
            padding-left: 12px;
            margin-bottom: 18px;
        }

        /* Tarjetas */
        .module-card {
            border: none;
            border-radius: 18px;
            padding: 28px;
            text-align: center;
            transition: 0.3s;
            min-height: 135px;
        }

        .module-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 14px 28px rgba(0,0,0,0.25);
        }

        .module-card h4 {
            font-weight: 800;
        }

        .module-card a,
     .module-card h4,
.module-card p {
    color: #111 !important;
}


        /* Colores */
        .clientes { background-color: #F5A2BE; }
        .productos { background-color: #FFD3DD; }
        .sucursales { background-color: #81BFB7; }
        .empleados { background-color: #C6E6E3; }
        .ventas { background-color: #81BFB7; }
        .proveedores { background-color: #BFE3E0; }
        .detalle-venta { background-color: #f9f9a9; }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
    <div class="container">

        <!-- TEXTO PRINCIPAL -->
        <a class="navbar-brand text-dark" href="{{ url('/') }}">
            Sistema Papelería
        </a>

        <!-- btn responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- menú -->
        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('clientes.index') }}">Clientes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('productos.index') }}">Productos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('sucursales.index') }}">Sucursales</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('empleados.index') }}">Empleados</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('proveedores.index') }}">Proveedores</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('detalle_venta.index') }}">Detalle Venta</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('ventas.index') }}">Ventas</a></li>
            </ul>
        </div>

    </div>
</nav>


<main class="container pt-2 pb-4">
    @yield('content')
</main>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>
</html>