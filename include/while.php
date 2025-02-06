<?php include_once "../include/header.php";

require_once '../clases/AsteriskGenerator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['length'])) {
    $length = (int)$_POST['length'];

    $asteriskGenerator = new AsteriskGenerator();
    $result = $asteriskGenerator->generateAsterisks($length);

    echo "<h3>Cadena de Asteriscos:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: While.Generador de Cadena de Asteriscos</h2>';
    echo '<form method="POST" action="while.php">';
    echo '    <label>Introduce la longitud de la cadena de asteriscos:</label>';
    echo '    <input type="number" name="length" min="1" max="50" required>';
    echo '    <button type="submit">Generar Asteriscos</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../include/footer.php"; ?>

