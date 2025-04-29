<?php include_once "../controllers/header.php";

require_once '../models/EvaluadorDeNumero.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero'])) {
    $numero = floatval($_POST['numero']);

    $evaluador = new EvaluadorDeNumero();
    $resultado = $evaluador->evaluadorDeNumero($numero);

    echo "<h3>Resultado:</h3>";
    echo "<p>$resultado</p>";
} else {
    echo '<h2>Estructura de control: If.Evaluador de Números</h2>';
    echo '<form method="POST" action="if.php">';
    echo '    <label>Introduce un número (puede ser positivo, negativo o cero):</label><br>';
    echo '    <input type="number" name="numero" step="any" required><br>';
    echo '    <button type="submit">Evaluar</button>';
    echo '</form>';
}
?>
<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../controllers/footer.php"; ?>