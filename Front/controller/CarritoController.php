<?php
session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

$action = $_GET["action"] ?? "";

switch ($action) {

    case "agregar":
        $id = $_POST["id_producto"];
        if (!isset($_SESSION["carrito"][$id])) {
            $_SESSION["carrito"][$id] = 1;
        } else {
            $_SESSION["carrito"][$id]++;
        }
        header("Location: ../controller/ProductoController.php");
        break;

    default:
        echo "Acción no válida";
}
