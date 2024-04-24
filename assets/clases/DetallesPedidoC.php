<?php

class DetallePedidosC
{
    public $id_detalle;
    public $id_pedido;
    public $id_producto;
    public $cantidad;

    public function __construct($id_detalle, $id_pedido, $id_producto, $cantidad)
    {
        $this->id_detalle = $id_detalle;
        $this->id_pedido = $id_pedido;
        $this->id_producto = $id_producto;
        $this->cantidad = $cantidad;
    }
}
?>