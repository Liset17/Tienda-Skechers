<?php
require_once "../business/CarritoService.php";
$service = new CarritoService();
$items = $service->obtenerCarrito(1); // usuario 1 temporal
?>

<h1>Carrito</h1>

<table border="1">
<tr>
    <th>Producto</th>
    <th>Cantidad</th>
    <th>Total</th>
</tr>

<?php foreach ($items as $i): ?>
<tr>
    <td><?= $i["id_inventario"] ?></td>
    <td><?= $i["cantidad"] ?></td>
    <td><?= $i["cantidad"] * 20 ?> €</td>
</tr>
<?php endforeach; ?>
</table>

<a href="confirmar_compra.php">Confirmar compra</a>
