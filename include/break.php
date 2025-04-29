<?php include_once "../include/header.php";

require_once '../clases/WordFinder.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['words']) && isset($_POST['letter'])) {
    $words = explode(',', $_POST['words']); // Convertir la lista de palabras en un array
    $letter = strtolower($_POST['letter']);

    $wordFinder = new WordFinder();
    $result = $wordFinder->findFirstWordStartingWith($words, $letter);

    echo "<h3>Resultado:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: Break. Buscador de Palabras</h2>';
    echo '<form method="POST" action="break.php">';
    echo '    <label>Introduce una lista de palabras separadas por comas:</label><br>';
    echo '    <input type="text" name="words" placeholder="Ejemplo: casa,perro,gato,árbol" required><br>';
    echo '    <label>Introduce la letra inicial a buscar:</label><br>';
    echo '    <input type="text" name="letter" maxlength="1" required><br>';
    echo '    <button type="submit">Buscar</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../include/footer.php"; ?>
