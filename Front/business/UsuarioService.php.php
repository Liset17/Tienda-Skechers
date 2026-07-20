<?php
require_once "../data/UsuarioDAO.php";
require_once "../model/Usuario.php";
/*Idem para productos, carrito, ventas */
class UsuarioService {

    private $dao;

    public function __construct() {
        $this->dao = new UsuarioDAO();
    }

    public function crearUsuario($nombre, $email, $password, $tipo) {
        $usuario = new Usuario($nombre, $email, password_hash($password, PASSWORD_BCRYPT), $tipo);
        return $this->dao->crear($usuario);
    }

    public function listarUsuarios() {
        return $this->dao->listar();
    }

    public function eliminarUsuario($id) {
        return $this->dao->eliminar($id);
    }
}
?>
