<?php
require_once "../business/ProductoService.php";
$service = new ProductoService();

if ($_POST) {
    $service->crearProducto(
        $_POST["nombre"],
        $_POST["descripcion"],
        $_POST["precio"],
        $_POST["imagen"],
        $_POST["id_categoria"]
    );
    header("Location: admin_productos.php");
}
?>

<form method="POST">
    Nombre: <input name="nombre"><br>
    Descripción: <textarea name="descripcion"></textarea><br>
    Precio: <input name="precio" type="number" step="0.01"><br>
    Imagen: <input name="imagen"><br>
    Categoría: <input name="id_categoria"><br>
    <button type="submit">Guardar</button>
</form>
