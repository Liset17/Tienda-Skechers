<?php

require_once __DIR__ . '/../service/ProductoService.php';

$service = new ProductoService();

// Obtener productos
$productos = $service->listarProductos();

// Enviar a la vista
include __DIR__ . '/../inicio.php';
