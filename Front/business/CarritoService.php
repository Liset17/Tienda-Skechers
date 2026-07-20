<?php
require_once "../data/CarritoDAO.php";

class CarritoService {

    private $dao;

    public function __construct() {
        $this->dao = new CarritoDAO();
    }

    public function agregarProducto($id_usuario, $id_inventario, $cantidad) {
        return $this->dao->agregar($id_usuario, $id_inventario, $cantidad);
    }

    public function obtenerCarrito($id_usuario) {
        return $this->dao->obtenerCarrito($id_usuario);
    }

    public function vaciarCarrito($id_usuario) {
        return $this->dao->vaciar($id_usuario);
    }
}
?>
