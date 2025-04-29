<?php include_once "../controllers/header.php";

require_once '../models/WordFilter.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['words']) && isset($_POST['letter'])) {
    $words = explode(',', $_POST['words']);
    $letter = strtolower($_POST['letter']);

    $wordFilter = new WordFilter();
    $result = $wordFilter->filterWordsWithoutLetter($words, $letter);

    echo "<h3>Resultado:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: Continue. Filtro de Palabras</h2>';
    echo '<form method="POST" action="continue.php">';
    echo '    <label>Introduce una lista de palabras separadas por comas:</label><br>';
    echo '    <input type="text" name="words" placeholder="Ejemplo: casa,perro,gato,árbol" required><br>';
    echo '    <label>Letra a filtrar:</label><br>';
    echo '    <input type="text" name="letter" maxlength="1" required><br>';
    echo '    <button type="submit">Filtrar</button>';
    echo '</form>';
}
?>
<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../controllers/footer.php"; ?>
