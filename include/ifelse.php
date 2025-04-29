<?php include_once "../controllers/header.php";

require_once '../models/WeatherClassifier.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['temperature'])) {
    $temperature = (float)$_POST['temperature'];

    $weatherClassifier = new WeatherClassifier();
    $result = $weatherClassifier->classifyWeather($temperature);

    echo "<h3>Resultado:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: Ifelse.Clasificador de Clima</h2>';
    echo '<form method="POST" action="ifelse.php">';
    echo '    <label>Introduce la temperatura en grados Celsius:</label>';
    echo '    <input type="number" name="temperature" step="0.1" required>';
    echo '    <button type="submit">Clasificar</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../controllers/footer.php"; ?>
