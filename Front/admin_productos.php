<?php
require_once "../business/ProductoService.php";
$service = new ProductoService();
$productos = $service->listarProductos();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrar Productos</title>
</head>
<body>

<h1>Productos</h1>

<a href="agregar_producto.php">Agregar producto</a>

<table border="1">
    <tr>
        <th>ID</th><th>Nombre</th><th>Precio</th><th>Acciones</th>
    </tr>

<?php foreach ($productos as $p): ?>
<tr>
    <td><?= $p["id_producto"] ?></td>
    <td><?= $p["nombre"] ?></td>
    <td><?= $p["precio"] ?> €</td>
    <td><a href="eliminar_producto.php?id=<?= $p["id_producto"] ?>">Eliminar</a></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
