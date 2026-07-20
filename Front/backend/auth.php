<?php
// Backend inicial para autenticación. Esta es la nueva capa de servidor.

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'login':
        // Aquí recibirías email y password y validarías con la base de datos.
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'ok',
            'action' => 'login',
            'email' => $email,
            'message' => 'Back-end de login en construcción.'
        ]);
        break;

    case 'register':
        $nombre = $_POST['nombre'] ?? '';
        $apellidos = $_POST['apellidos'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        header('Content-Type: application/json');
        echo json_encode([
            'status' => 'ok',
            'action' => 'register',
            'nombre' => $nombre,
            'message' => 'Back-end de registro en construcción.'
        ]);
        break;

    default:
        http_response_code(400);
        echo json_encode(['status' => 'error', 'message' => 'Acción no válida.']);
        break;
}
