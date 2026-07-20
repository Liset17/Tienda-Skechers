<?php
require_once "../data/ProductoDAO.php";
require_once "../model/Producto.php";

class ProductoService {

    private $dao;

    public function __construct() {
        $this->dao = new ProductoDAO();
    }

    public function crearProducto($nombre, $descripcion, $precio, $imagen, $id_categoria) {
        $p = new Producto($nombre, $descripcion, $precio, $imagen, $id_categoria);
        return $this->dao->crear($p);
    }

    public function listarProductos() {
        return $this->dao->listar();
    }

    public function eliminarProducto($id) {
        return $this->dao->eliminar($id);
    }
}
?>
