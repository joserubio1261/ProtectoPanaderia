<?php
require_once "Conexion.php";
require_once "RolesC.php";
require_once "UsuariosC.php";
require_once "ProductosC.php";

try {
    // Insertar administrador si no existe
    $admin = new UsuariosC(null, RolesC::obtenerIdPorNombre('Admin'), "Jose Rubio Hidalgo", "admin", password_hash("Bournout2012", PASSWORD_DEFAULT), "joserubiohidalgo1261@hotmail.com", "123456789", "../images/perfiles/adminRubio.jpg");
    if (!UsuariosC::existeUsuario($admin->nombre_usuario)) {
        UsuariosC::insertarUsuario($admin->id_rol, $admin->nombre_completo, $admin->nombre_usuario, $admin->contrasena, $admin->correo, $admin->telefono, $admin->imagen);
    }

    // Insertar clientes si no existen
    $clientes = array(
        new UsuariosC(null, RolesC::obtenerIdPorNombre('Cliente'), "Salva Ruiz Rodrigez", "Salvita", password_hash("Bournout2012", PASSWORD_DEFAULT), "salroud@hotmail.com", "554686785", "../images/perfiles/usuarioSalva.jpg"),
        new UsuariosC(null, RolesC::obtenerIdPorNombre('Cliente'), "Mario Vidalg Garcia", "mariotto", password_hash("Bournout2012", PASSWORD_DEFAULT), "resjosmo@hotmail.com", "632145874", "../images/perfiles/usuarioMario.jpg")
    );

    foreach ($clientes as $cliente) {
        if (!UsuariosC::existeUsuario($cliente->nombre_usuario)) {
            UsuariosC::insertarUsuario($cliente->id_rol, $cliente->nombre_completo, $cliente->nombre_usuario, $cliente->contrasena, $cliente->correo, $cliente->telefono, $cliente->imagen);
        }
    }

    // Insertar empleados si no existen
    $empleados = array(
        new UsuariosC(null, RolesC::obtenerIdPorNombre('Empleado'), "Jose Antonio", "JoseAntonio", password_hash("Bournout2012", PASSWORD_DEFAULT), "jose.a.r@hotmail.com", "631422254", "../images/perfiles/empleadoJose.jpg"),
        new UsuariosC(null, RolesC::obtenerIdPorNombre('Empleado'), "Chivo Garcia", "ChimoG", password_hash("Bournout2012", PASSWORD_DEFAULT), "chimoroc@hotmail.com", "356744411", "../images/perfiles/empleadoChimo.png")
    );

    foreach ($empleados as $empleado) {
        if (!UsuariosC::existeUsuario($empleado->nombre_usuario)) {
            UsuariosC::insertarUsuario($empleado->id_rol, $empleado->nombre_completo, $empleado->nombre_usuario, $empleado->contrasena, $empleado->correo, $empleado->telefono, $empleado->imagen);
        }
    }

    $productos = array(
        // Dulces
        new ProductosC(null, "Curasanes Grandes", "dulce", "Curasanes grandes y deliciosos", 3.50, 50),
        new ProductosC(null, "Curasanes Normales", "dulce", "Curasanes normales y deliciosos", 0.25, 100),
        new ProductosC(null, "Curasanes de Chocolate negro cubierto", "dulce", "Curasanes con cobertura de chocolate negro", 0.50, 80),
        new ProductosC(null, "Curasanes de Chocolate negro relleno", "dulce", "Curasanes rellenos de chocolate negro", 0.50, 80),
        new ProductosC(null, "Curasanes de Chocolate blanco cubierto", "dulce", "Curasanes con cobertura de chocolate blanco", 0.50, 80),
        new ProductosC(null, "Curasanes de Chocolate blanco relleno", "dulce", "Curasanes rellenos de chocolate blanco", 0.50, 80),
        new ProductosC(null, "Ensaimadas Normales", "dulce", "Ensaimadas tradicionales", 0.25, 100),
        new ProductosC(null, "Ensaimadas de chocolate negro cubierto", "dulce", "Ensaimadas con cobertura de chocolate negro", 0.50, 80),
        new ProductosC(null, "Ensaimadas de chocolate blanco cubierto", "dulce", "Ensaimadas con cobertura de chocolate blanco", 0.50, 80),
        new ProductosC(null, "Tarta de Manzana", "dulce", "Deliciosa tarta de manzana", 1.50, 50),
        new ProductosC(null, "Coca Catalana", "dulce", "Coca típica de Cataluña", 17.00, 20),
        new ProductosC(null, "Coca de Arándanos", "dulce", "Coca con arándanos", 17.00, 20),
        new ProductosC(null, "Coca de Nueces", "dulce", "Coca con nueces", 17.00, 20),
        new ProductosC(null, "Bizcocho Normal", "dulce", "Bizcocho tradicional", 1.50, 50),
        new ProductosC(null, "Bizcocho de Chocolate", "dulce", "Bizcocho de chocolate", 2.00, 50),
        new ProductosC(null, "Bizcocho de Manzana", "dulce", "Bizcocho de manzana", 2.00, 50),
        new ProductosC(null, "Donuts Normal", "dulce", "Donuts tradicional", 1.00, 100),
        new ProductosC(null, "Donuts Chocolate", "dulce", "Donuts de chocolate", 1.25, 100),
        new ProductosC(null, "Pan quemado", "dulce", "Pan quemado", 2.50, 50),
        new ProductosC(null, "Coca boba", "dulce", "Coca boba", 3.50, 50),
        new ProductosC(null, "Coca Pasas y Nueces", "dulce", "Coca con pasas y nueces", 3.50, 50),
        new ProductosC(null, "Palmeras de Chocolate", "dulce", "Palmeras de chocolate", 0.20, 200),
        new ProductosC(null, "Palmeras de Coco", "dulce", "Palmeras de coco", 0.20, 200),
        new ProductosC(null, "Bombas de chocoltate", "dulce", "Bomba cubierta y rellena de Chocolate", 1.50, 30),
        new ProductosC(null, "Cañas rellenas de Crema", "dulce", "Cañas rellenas de crema", 1.50, 100),
        new ProductosC(null, "Milhojas Blancas", "dulce", "Milhojas blancas", 2.00, 60),
        new ProductosC(null, "Milhojas Negras", "dulce", "Milhojas negras", 2.00, 60),

        // Salados
        new ProductosC(null, "Pizza de Philadelphia", "salado", "Pizza de Philadelphia", 1.00, 50),
        new ProductosC(null, "Pizza de Jamón-York", "salado", "Pizza de Jamón-York", 1.00, 50),
        new ProductosC(null, "Pizza de Barbacoa", "salado", "Pizza de Barbacoa", 1.00, 50),
        new ProductosC(null, "Pizza de Carbonara", "salado", "Pizza de Carbonara", 1.00, 50),
        new ProductosC(null, "Pizza Completa", "salado", "Pizza Completa", 1.00, 50),
        new ProductosC(null, "Empanada de Pisto", "salado", "Empanada de Pisto", 1.00, 50),
        new ProductosC(null, "Empanada de Espinacas", "salado", "Empanada de Espinacas", 1.00, 50),
        new ProductosC(null, "Empanada de Butifarra", "salado", "Empanada de Butifarra", 1.00, 50),
        new ProductosC(null, "Empanadilla de Pisto", "salado", "Empanadilla de Pisto", 1.50, 50),
        new ProductosC(null, "Empanadilla de Cebolla", "salado", "Empanadilla de Cebolla", 1.50, 50),
        new ProductosC(null, "Empanadilla de Espinacas", "salado", "Empanadilla de Espinacas", 1.50, 50),
        new ProductosC(null, "Palitos de Atún", "salado", "Palitos de Atún", 1.50, 50),
        new ProductosC(null, "Palitos de Tortilla", "salado", "Palitos de Tortilla", 1.50, 50),
        new ProductosC(null, "Palitos de Sobrasada", "salado", "Palitos de Sobrasada", 1.50, 50),
        new ProductosC(null, "Palitos de Philadelphia", "salado", "Palitos de Philadelphia", 1.50, 50),
        new ProductosC(null, "Saladitos de Atún", "salado", "Saladitos de Atún", 0.15, 200),
        new ProductosC(null, "Saladitos de Queso", "salado", "Saladitos de Queso", 0.15, 200),
        new ProductosC(null, "Saladitos de Sobrasada", "salado", "Saladitos de Sobrasada", 0.15, 200),
        new ProductosC(null, "Saladitos de Jamón-York", "salado", "Saladitos de Jamón-York", 0.15, 200),
        new ProductosC(null, "Curasanes Salados de Tortilla", "salado", "Curasanes de Tortilla", 0.25, 100),
        new ProductosC(null, "Curasanes Salados de Chorizo", "salado", "Curasanes de Chorizo", 0.25, 100),
        new ProductosC(null, "Curasanes Salados de Frankfurt", "salado", "Curasanes de Frankfurt", 0.25, 100),
        new ProductosC(null, "Crep de Tortilla", "salado", "Crep de tortilla", 1.50, 40),
        new ProductosC(null, "Crep de Philadelphia", "salado", "Crep de philadelphia", 1.50, 40),
        new ProductosC(null, "Crep de Atún y Olivas", "salado", "Crep de atún y olivas", 1.50, 30),
        new ProductosC(null, "Crep de Jamón-York", "salado", "Crep de jamón-york", 1.50, 30),
        new ProductosC(null, "Pan Normal", "salado", "Pan Normal", 0.90, 200),
        new ProductosC(null, "Pan de Pueblo", "salado", "Pan de Pueblo", 0.90, 200),
        new ProductosC(null, "Pan de 1/2 Kilo", "salado", "Pan de 1/2 Kilo", 1.50, 150),
        new ProductosC(null, "Pan de 1 Kilo", "salado", "Pan de 1 Kilo", 2.00, 100)

    );

    foreach ($productos as $producto) {
        ProductosC::insertarProducto($producto->nombre, $producto->tipo, $producto->descripcion, $producto->precio, $producto->cantidad_en_stock);
    }

    header("Location: ../php/forn.php");
    exit;
} catch (Exception $e) {

    header("Location: ../php/forn.php?error=" . urlencode($e->getMessage()));
    exit;
}
