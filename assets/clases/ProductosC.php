<?php

class ProductosC
{
    public $id_producto;
    public $nombre;
    public $tipo;
    public $descripcion;
    public $precio;
    public $cantidad_en_stock;

    public function __construct($id_producto, $nombre, $tipo, $descripcion, $precio, $cantidad_en_stock)
    {
        $this->id_producto = $id_producto;
        $this->nombre = $nombre;
        $this->tipo = $tipo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->cantidad_en_stock = $cantidad_en_stock;
    }
    public static function insertarProducto($nombre, $tipo, $descripcion, $precio, $cantidad_en_stock)
    {
        $conexion = new Conexion();
        $stmt = $conexion->obtenerConexion()->prepare("INSERT INTO productos (nombre, tipo, descripcion, precio, cantidad_en_stock) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssdi", $nombre, $tipo, $descripcion, $precio, $cantidad_en_stock);
        return $stmt->execute();
    }

    public static function obtenerTodosLosProductos()
    {
        $conexion = new Conexion();
        $query = "SELECT * FROM productos";
        $result = $conexion->obtenerConexion()->query($query);

        $productos = [];
        while ($row = $result->fetch_assoc()) {
            $producto = new ProductosC(
                $row['id_producto'],
                $row['nombre'],
                $row['tipo'],
                $row['descripcion'],
                $row['precio'],
                $row['cantidad_en_stock']
            );
            $productos[] = $producto;
        }

        return $productos;
    }

    public static function obtenerDulces()
    {
        $conexion = new Conexion();
        $query = "SELECT * FROM productos WHERE tipo = 'dulce'";
        $result = $conexion->obtenerConexion()->query($query);

        $productos = [];
        while ($row = $result->fetch_assoc()) {
            $producto = new ProductosC(
                $row['id_producto'],
                $row['nombre'],
                $row['tipo'],
                $row['descripcion'],
                $row['precio'],
                $row['cantidad_en_stock']
            );
            $productos[] = $producto;
        }

        return $productos;
    }

    public static function obtenerSalados()
    {
        $conexion = new Conexion();
        $query = "SELECT * FROM productos WHERE tipo = 'salado'";
        $result = $conexion->obtenerConexion()->query($query);

        $productos = [];
        while ($row = $result->fetch_assoc()) {
            $producto = new ProductosC(
                $row['id_producto'],
                $row['nombre'],
                $row['tipo'],
                $row['descripcion'],
                $row['precio'],
                $row['cantidad_en_stock']
            );
            $productos[] = $producto;
        }

        return $productos;
    }
}
?>