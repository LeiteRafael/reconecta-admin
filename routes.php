<?php
$controller = new UserController();

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    http_response_code(404);
    echo "Ação não encontrada!";
}
