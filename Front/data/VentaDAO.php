<?php
require_once "Conexion.php";

class VentaDAO {

    public function crearVenta($id_usuario, $total) {
        $con = Conexion::conectar();
        $sql = "INSERT INTO ventas(id_usuario, total) VALUES (?,?)";
        $stmt = $con->prepare($sql);
        $stmt->execute([$id_usuario, $total]);
        return $con->lastInsertId();
    }

    public function agregarDetalle($id_venta, $id_inventario, $cantidad, $precio_unitario) {
        $con = Conexion::conectar();
        $sql = "INSERT INTO detalle_venta(id_venta, id_inventario, cantidad, precio_unitario)
                VALUES (?,?,?,?)";
        $stmt = $con->prepare($sql);
        return $stmt->execute([
            $id_venta,
            $id_inventario,
            $cantidad,
            $precio_unitario
        ]);
    }
}
?>
