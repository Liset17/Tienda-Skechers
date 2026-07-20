<?php
require_once "../data/VentaDAO.php";
require_once "../data/CarritoDAO.php";

class VentaService {

    private $ventaDAO;
    private $carritoDAO;

    public function __construct() {
        $this->ventaDAO = new VentaDAO();
        $this->carritoDAO = new CarritoDAO();
    }

    public function confirmarCompra($id_usuario, $items) {
        $total = 0;

        foreach ($items as $i) {
            $total += $i["cantidad"] * $i["precio"];
        }

        $id_venta = $this->ventaDAO->crearVenta($id_usuario, $total);

        foreach ($items as $i) {
            $this->ventaDAO->agregarDetalle($id_venta, $i["id_inventario"], $i["cantidad"], $i["precio"]);
        }

        $this->carritoDAO->vaciar($id_usuario);

        return $id_venta;
    }
}
?>
