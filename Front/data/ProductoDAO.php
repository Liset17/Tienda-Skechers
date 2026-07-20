<?php
require_once "Conexion.php";

class ProductoDAO {

    public function crear($producto) {
        $con = Conexion::conectar();
        $sql = "INSERT INTO productos(nombre, descripcion, precio, imagen, id_categoria)
                VALUES (?,?,?,?,?)";
        $stmt = $con->prepare($sql);
        return $stmt->execute([
            $producto->nombre,
            $producto->descripcion,
            $producto->precio,
            $producto->imagen,
            $producto->id_categoria
        ]);
    }

    public function listar() {
        $con = Conexion::conectar();
        $stmt = $con->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminar($id) {
        $con = Conexion::conectar();
        $stmt = $con->prepare("DELETE FROM productos WHERE id_producto=?");
        return $stmt->execute([$id]);
    }
}
?>
