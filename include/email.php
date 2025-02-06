<?php include_once "../include/header.php";

    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $email = $_POST['email'];
            $mensaje = $_POST['mensaje'];
            $header = "From: noreply@example.com" . "\r\n";
            $header .= "Reply-To: noreply@example.com" . "\r\n";
            $header .= "X-Mailer: PHP/" . phpversion();
            $mail = @mail($email, $asunto, $mensaje, $header);

            echo "<div class='mt-3 text-center'>";
            if ($mail) {
                echo "<h4 class='text-success'>¡Mail enviado con éxito!</h4>";
            } else {
                echo "<h4 class='text-danger'>Hubo un error al enviar el correo.</h4>";
            }
            echo "</div>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center text-primary">Formulario de Contacto</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto:</label>
                <input type="text" id="asunto" name="asunto" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" class="form-control" required></textarea>
            </div>

            <div class="text-center">
                <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
            </div>
        </form>

</div>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../include/footer.php"; ?>

