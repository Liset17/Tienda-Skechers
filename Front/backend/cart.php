<?php
// Backend inicial para carrito. Aquí se procesarán las operaciones del carrito.

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'add':
        $id_producto = $_POST['id_producto'] ?? '';
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'ok',
            'action' => 'add',
            'id_producto' => $id_producto,
            'message' => 'Back-end de carrito en construcción.'
        ]);
        break;

    default:
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Acción no válida.']);
        break;
}
