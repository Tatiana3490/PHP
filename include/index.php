<?php include_once "../include/header.php";

session_start();

// Para ver si la sesión tiene los datos del usuario
if (!isset($_SESSION['nombre'])) {
    if (isset($_COOKIE['nombre_usuario'])) {
        $nombre = htmlspecialchars($_COOKIE['nombre_usuario']);
        echo "<div class='container mt-5 text-center'><h1>Bienvenido a mi App Web, " . htmlspecialchars($nombre) . "!</h1>";
        echo "<p>Por favor, es necesario iniciar sesión para continuar.</p>";
        echo '<a href="../inicio_sesion.php" class="btn btn-primary">LogIn</a></div>';
        exit();
    }  else {
        header('Location: ../inicio_sesion.php ');
        exit();
    }
}
?>
<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="text-success text-center">¡Conseguido! <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h3>
        <p class="text-center">Tu id de sesión es: <strong><?php echo htmlspecialchars($_SESSION['id_sesion']); ?></strong></p>
        <p class="text-center">Edad: <?php echo htmlspecialchars($_SESSION['edad']); ?> años.</p>
    </div>

    <h1 class="mt-4 text-center">Estructuras de Control en PHP</h1>
    <p class="text-center">Selecciona una estructura de control para ver un ejemplo:</p>

    <ul class="list-group">
        <li class="list-group-item"><a href="break.php">Ejemplo: break</a></li>
        <li class="list-group-item"><a href="continue.php">Ejemplo: continue</a></li>
        <li class="list-group-item"><a href="dowhile.php">Ejemplo: do ... while</a></li>
        <li class="list-group-item"><a href="if.php">Ejemplo: if</a></li>
        <li class="list-group-item"><a href="ifelse.php">Ejemplo: if ... else</a></li>
        <li class="list-group-item"><a href="elseif.php">Ejemplo: elseif</a></li>
        <li class="list-group-item"><a href="switch.php">Ejemplo: switch</a></li>
        <li class="list-group-item"><a href="while.php">Ejemplo: while</a></li>
        <li class="list-group-item"><a href="for.php">Ejemplo: for</a></li>
        <li class="list-group-item"><a href="foreach.php">Ejemplo: foreach</a></li>
        <li class="list-group-item"><a href="email.php">Ejemplo: eMail</a></li>
    </ul>

    <div class="text-center mt-4">
        <form action="../cerrar_sesion.php" method="get">
            <button type="submit" class="btn btn-danger">LogOut</button>
        </form>
    </div>
</div>
</body>
</html>


<?php include_once "../include/footer.php"; ?>

