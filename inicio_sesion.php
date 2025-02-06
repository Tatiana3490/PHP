<?php
session_start();

// Para cuando inicias sesiónte redirige al index
if (isset($_SESSION['nombre'])) {
    header('Location: include/index.php');
    exit();
}

session_regenerate_id(); //Esto es para que en cada inicio de sesión se genere un id nuevo

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['edad'] = (int)$_POST['edad'];
    $_SESSION['id_sesion'] = session_id();

    setcookie('nombre_usuario', $_POST['nombre'], time() + 1800);

    header('Location: include/index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
<div class="card shadow p-4" style="width: 25rem;">
    <h2 class="text-center">Bienvenid@ a Mi App Web</h2>
    <p class="text-center">Por favor, introduce los siguientes datos para iniciar sesión.</p>
    <form method="POST" action="inicio_sesion.php">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" id="edad" name="edad" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">LogIn</button>
    </form>
</div>
</body>
</html>