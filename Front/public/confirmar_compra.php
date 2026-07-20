<?php
require_once "../business/CarritoService.php";
require_once "../business/VentaService.php";

$carritoService = new CarritoService();
$ventaService = new VentaService();

$items = $carritoService->obtenerCarrito(1);

$id_venta = $ventaService->confirmarCompra(1, $items);

echo "Compra realizada. ID de venta: ".$id_venta;
?>
