<?php
require_once __DIR__ . '/../data/ProductoDAO.php';

class ProductoService {
    private $dao;

    public function __construct() {
        $this->dao = new ProductoDAO();
    }

    public function listarProductos() {
        return $this->dao->listar();
    }
}
