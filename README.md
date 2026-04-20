<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


//BASE DE DATOS

CREATE DATABASE IF NOT EXISTS papeleria;

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255),
    codigo_categoria VARCHAR(50) UNIQUE,
    estado VARCHAR(20) NOT NULL,
    fecha_creacion DATETIME NOT NULL,
    fecha_actualizacion DATETIME,
    usuario_creador VARCHAR(100),
    tipo_categoria VARCHAR(50),
    observaciones VARCHAR(255)
);

CREATE TABLE proveedores (
    id_proveedor INT AUTO_INCREMENT PRIMARY KEY,
    nombre_empresa VARCHAR(150) NOT NULL,
    nombre_contacto VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    correo VARCHAR(100),
    direccion VARCHAR(200),
    ciudad VARCHAR(100),
    rfc VARCHAR(20),
    estado VARCHAR(20) NOT NULL,
    fecha_registro DATETIME NOT NULL
);

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    apellido_paterno VARCHAR(100) NOT NULL,
    apellido_materno VARCHAR(100),
    telefono VARCHAR(20),
    correo VARCHAR(100),
    direccion VARCHAR(200),
    tipo_cliente VARCHAR(50),
    estado VARCHAR(20) NOT NULL,
    fecha_registro DATETIME NOT NULL
);

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255),
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    marca VARCHAR(100),
    codigo_barras VARCHAR(50) UNIQUE,
    id_categoria INT NOT NULL,
    id_proveedor INT NOT NULL,
    fecha_registro DATETIME NOT NULL,
    CONSTRAINT fk_producto_categoria FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria),
    CONSTRAINT fk_producto_proveedor FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor)
);

CREATE TABLE ventas (
    id_venta INT AUTO_INCREMENT PRIMARY KEY,
    folio VARCHAR(50) UNIQUE NOT NULL,
    id_cliente INT NOT NULL,
    fecha_venta DATETIME NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    iva DECIMAL(10,2) NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    metodo_pago VARCHAR(50) NOT NULL,
    estado_venta VARCHAR(30) NOT NULL,
    observaciones VARCHAR(255),
    CONSTRAINT fk_venta_cliente FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);


INSERT INTO categorias 
(nombre, descripcion, codigo_categoria, estado, fecha_creacion, fecha_actualizacion, usuario_creador, tipo_categoria, observaciones)
VALUES
('Cuadernos', 'para tareas y apuntes', 'CAT01', 'activo', NOW(), NOW(), 'ana', 'escolar', 'los mas vendidos'),
('Plumas', 'plumas normales', 'CAT02', 'activo', NOW(), NOW(), 'maria', 'oficina', 'varios colores'),
('Colores', 'colores para dibujar', 'CAT03', 'activo', NOW(), NOW(), 'sofia', 'escolar', 'para primaria'),
('Hojas', 'hojas blancas', 'CAT04', 'activo', NOW(), NOW(), 'diana', 'oficina', 'paquetes'),
('Carpetas', 'para guardar hojas', 'CAT05', 'activo', NOW(), NOW(), 'laura', 'escolar', 'plastico');

INSERT INTO proveedores
(nombre_empresa, nombre_contacto, telefono, correo, direccion, ciudad, rfc, estado, fecha_registro)
VALUES
('Papeleria Lopez', 'Carlos Lopez', '8711234567', 'lopez@gmail.com', 'centro 123', 'Torreon', 'RFC001', 'activo', NOW()),
('Suministros MX', 'Luis Garcia', '8717654321', 'suministros@gmail.com', 'roma 456', 'Torreon', 'RFC002', 'activo', NOW()),
('Distribuidora Norte', 'Ana Ruiz', '8712223344', 'norte@gmail.com', 'juarez 789', 'Torreon', 'RFC003', 'activo', NOW()),
('Papeles Express', 'Marta Diaz', '8719998888', 'express@gmail.com', 'morelos 321', 'Torreon', 'RFC004', 'activo', NOW()),
('Todo Escolar', 'Pedro Soto', '8715556666', 'escolar@gmail.com', 'independencia 654', 'Torreon', 'RFC005', 'activo', NOW());

INSERT INTO clientes
(nombre, apellido_paterno, apellido_materno, telefono, correo, direccion, tipo_cliente, estado, fecha_registro)
VALUES
('Ana', 'Lopez', 'Perez', '8711111111', 'ana@gmail.com', 'col centro', 'frecuente', 'activo', NOW()),
('Maria', 'Gomez', 'Diaz', '8712222222', 'maria@gmail.com', 'col roma', 'normal', 'activo', NOW()),
('Sofia', 'Ramirez', 'Torres', '8713333333', 'sofia@gmail.com', 'col villas', 'frecuente', 'activo', NOW()),
('Diana', 'Martinez', 'Lopez', '8714444444', 'diana@gmail.com', 'col sol', 'normal', 'activo', NOW()),
('Laura', 'Hernandez', 'Cruz', '8715555555', 'laura@gmail.com', 'col norte', 'frecuente', 'activo', NOW());


INSERT INTO productos
(nombre, descripcion, precio, stock, marca, codigo_barras, id_categoria, id_proveedor, fecha_registro)
VALUES
('Cuaderno profesional', '100 hojas', 45.50, 30, 'Scribe', 'COD001', 1, 1, NOW()),
('Pluma azul', 'tinta azul', 12.00, 80, 'Bic', 'COD002', 2, 2, NOW()),
('Caja de colores', '12 piezas', 65.00, 25, 'Crayola', 'COD003', 3, 3, NOW()),
('Paquete hojas', '500 hojas', 120.00, 15, 'Office', 'COD004', 4, 4, NOW()),
('Carpeta plastica', 'color azul', 20.00, 50, 'Gen', 'COD005', 5, 5, NOW());

INSERT INTO ventas
(folio, id_cliente, fecha_venta, subtotal, iva, total, metodo_pago, estado_venta, observaciones)
VALUES
('V001', 1, NOW(), 45.50, 7.28, 52.78, 'efectivo', 'completada', 'venta normal'),
('V002', 2, NOW(), 12.00, 1.92, 13.92, 'efectivo', 'completada', 'compra rapida'),
('V003', 3, NOW(), 65.00, 10.40, 75.40, 'tarjeta', 'completada', 'sin problema'),
('V004', 4, NOW(), 120.00, 19.20, 139.20, 'efectivo', 'completada', 'cliente nuevo'),
('V005', 5, NOW(), 20.00, 3.20, 23.20, 'tarjeta', 'completada', 'ok');


ALTER TABLE productos 
ADD estado VARCHAR(20) NOT NULL DEFAULT 'activo';

SELECT * FROM productos;
SHOW TABLES;

DESCRIBE productos;