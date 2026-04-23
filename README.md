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

DROP DATABASE IF EXISTS papeleria;
CREATE DATABASE papeleria CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE papeleria;

-- ======================
-- TABLAS
-- ======================

CREATE TABLE sucursales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(120) NOT NULL,
    calle VARCHAR(120) NOT NULL,
    numero VARCHAR(20) NOT NULL,
    colonia VARCHAR(80) NOT NULL,
    ciudad VARCHAR(80) NOT NULL,
    estado VARCHAR(80) NOT NULL,
    codigo_postal VARCHAR(10) NOT NULL,
    fecha_apertura DATE NOT NULL,
    activa TINYINT(1) NOT NULL
);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(80) NOT NULL,
    apellido_paterno VARCHAR(80) NOT NULL,
    apellido_materno VARCHAR(80) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(120) NOT NULL,
    calle VARCHAR(120) NOT NULL,
    numero VARCHAR(20) NOT NULL,
    colonia VARCHAR(80) NOT NULL,
    ciudad VARCHAR(80) NOT NULL,
    fecha_registro DATE NOT NULL,
    puntos INT NOT NULL
);

CREATE TABLE proveedores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_comercial VARCHAR(120) NOT NULL,
    contacto_nombre VARCHAR(120) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(120) NOT NULL,
    calle VARCHAR(120) NOT NULL,
    numero VARCHAR(20) NOT NULL,
    colonia VARCHAR(80) NOT NULL,
    ciudad VARCHAR(80) NOT NULL,
    rfc VARCHAR(20) NOT NULL,
    dias_credito INT NOT NULL,
    estatus VARCHAR(20) NOT NULL
);

CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sucursal_id INT NOT NULL,
    nombre VARCHAR(80) NOT NULL,
    apellido_paterno VARCHAR(80) NOT NULL,
    apellido_materno VARCHAR(80) NOT NULL,
    puesto VARCHAR(80) NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    email VARCHAR(120) NOT NULL,
    fecha_ingreso DATE NOT NULL,
    salario DECIMAL(10,2) NOT NULL,
    turno VARCHAR(30) NOT NULL,
    estatus VARCHAR(20) NOT NULL,
    FOREIGN KEY (sucursal_id) REFERENCES sucursales(id)
);

CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id INT NOT NULL,
    categoria VARCHAR(80) NOT NULL,
    codigo_barras VARCHAR(30) NOT NULL,
    nombre VARCHAR(150) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    marca VARCHAR(80) NOT NULL,
    unidad_medida VARCHAR(30) NOT NULL,
    costo DECIMAL(10,2) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    stock_minimo INT NOT NULL,
    fecha_caducidad DATE NULL,
    activo TINYINT(1) NOT NULL,
    FOREIGN KEY (proveedor_id) REFERENCES proveedores(id)
);

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sucursal_id INT NOT NULL,
    empleado_id INT NOT NULL,
    cliente_id INT NOT NULL,
    folio VARCHAR(30) NOT NULL,
    fecha_venta DATETIME NOT NULL,
    metodo_pago VARCHAR(40) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    descuento DECIMAL(10,2) NOT NULL,
    impuesto DECIMAL(10,2) NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    estatus VARCHAR(20) NOT NULL,
    FOREIGN KEY (sucursal_id) REFERENCES sucursales(id),
    FOREIGN KEY (empleado_id) REFERENCES empleados(id),
    FOREIGN KEY (cliente_id) REFERENCES clientes(id)
);

CREATE TABLE detalle_venta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    venta_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    descuento DECIMAL(10,2) NOT NULL,
    impuesto DECIMAL(10,2) NOT NULL,
    subtotal DECIMAL(10,2) NOT NULL,
    observaciones VARCHAR(150) NOT NULL,
    entregado TINYINT(1) NOT NULL,
    FOREIGN KEY (venta_id) REFERENCES ventas(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id)
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