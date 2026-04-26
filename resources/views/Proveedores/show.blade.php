<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
       Datos proveedores 
    </h1>

    <p>
        ID : {{ $proveedor->id }}
    </p>

    <p>
        Nombre del Comercial: {{ $proveedor->nombre_comercial }}
    </p>
        
    <p>
        Nombre del Contacto: {{ $proveedor->contacto_nombre }}
    </p>

    <p>
        Telefono: {{ $proveedor->telefono }}
    </p>

    <p>
        Email: {{ $proveedor->email }}
    </p>

    <p>
        Calle: {{ $proveedor->calle }}
    </p>

    <p>
        Numero: {{ $proveedor->numero }}
    </p>

    <p>
        Colonia: {{ $proveedor->colonia }}
    </p>

    <p>
        Ciudad: {{ $proveedor->ciudad }}
    </p>

    <p>
        RFC: {{ $proveedor->rfc }}
    </p>

    <p>
        Dias de Credito: {{ $proveedor->dias_credito }}
    </p>

    <p>
        Estatus: {{ $proveedor->estatus }}
    </p>

    
    <a href="{{ route('proveedores.index') }}"> Volver </a>

</body>
</html>