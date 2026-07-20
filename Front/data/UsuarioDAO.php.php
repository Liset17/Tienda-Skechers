<?php
require_once "Conexion.php";/*conectar a MySQL.*/ 

class UsuarioDAO {

    public function crear($usuario) {
        $con = Conexion::conectar();/*Obtener la conexión a la base de datos*/ 
        $sql = "INSERT INTO usuarios(nombre, email, password, tipo) VALUES (?,?,?,?)";
        $stmt = $con->prepare($sql);/*$stmt = $con->prepare($sql);*/

        return $stmt->execute([ /*Devolvera true o false según si se inserto correctamente */
            $usuario->nombre,
            $usuario->email,
            $usuario->password,
            $usuario->tipo
        ]);
    }

    public function listar() {
        $con = Conexion::conectar();
        $stmt = $con->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminar($id) {
        $con = Conexion::conectar();
        $stmt = $con->prepare("DELETE FROM usuarios WHERE id_usuario=?");
        return $stmt->execute([$id]);
    }
}
?>
