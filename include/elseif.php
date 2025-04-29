<?php include_once "../controllers/header.php";

require_once '../models/GradeEvaluator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['grade'])) {
    $grade = (float)$_POST['grade'];

    $gradeEvaluator = new GradeEvaluator();
    $result = $gradeEvaluator->evaluateGrade($grade);

    echo "<h3>Resultado:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: ElseIf. Evaluador de Calificaciones</h2>';
    echo '<form method="POST" action="elseif.php">';
    echo '    <label>Introduce la calificación (0-10):</label>';
    echo '    <input type="number" name="grade" min="0" max="10" step="0.1" required>';
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