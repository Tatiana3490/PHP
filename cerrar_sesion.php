<?php
session_start();
$_SESSION = array();
session_destroy();

if (isset($_COOKIE['nombre_usuario'])) {
    setcookie('nombre_usuario', '', time() - 42000);
}

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
<div class="card shadow p-4 text-center" style="width: 25rem;">
    <h2 class="text-danger">Sesión Cerrada</h2>
    <p>Se han eliminado todas las sesiones.</p>
    <a href="inicio_sesion.php" class="btn btn-primary">Back Home</a>
</div>
</body>
</html>