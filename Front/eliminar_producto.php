<?php
require_once "../business/ProductoService.php";

$service = new ProductoService();
$service->eliminarProducto($_GET["id"]);

header("Location: admin_productos.php");
?>
