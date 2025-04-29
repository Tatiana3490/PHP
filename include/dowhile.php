<?php include_once "../controllers/header.php";

require_once '../models/CountdownGenerator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['start'])) {
    $start = (int)$_POST['start'];

    $countdownGenerator = new CountdownGenerator();
    $result = $countdownGenerator->generateCountdown($start);

    echo "<h3>Resultado:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: Do While.Generador de Cuenta Regresiva</h2>';
    echo '<form method="POST" action="dowhile.php">';
    echo '    <label>Introduce el número inicial para la cuenta regresiva:</label>';
    echo '    <input type="number" name="start" min="1" required>';
    echo '    <button type="submit">Iniciar Cuenta Regresiva</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../controllers/footer.php"; ?>
