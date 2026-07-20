<?php
require_once "Conexion.php";

class CarritoDAO {

    public function agregar($id_usuario, $id_inventario, $cantidad) {
        $con = Conexion::conectar();
        $sql = "INSERT INTO carrito(id_usuario, id_inventario, cantidad)
                VALUES (?,?,?)";
        $stmt = $con->prepare($sql);
        return $stmt->execute([$id_usuario, $id_inventario, $cantidad]);
    }

    public function obtenerCarrito($id_usuario) {
        $con = Conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM carrito WHERE id_usuario=?");
        $stmt->execute([$id_usuario]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function vaciar($id_usuario) {
        $con = Conexion::conectar();
        $stmt = $con->prepare("DELETE FROM carrito WHERE id_usuario=?");
        return $stmt->execute([$id_usuario]);
    }
}
?>
