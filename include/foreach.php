<?php include_once "../controllers/header.php";

require_once '../models/SaladGenerator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ingredients'])) {
    $ingredients = $_POST['ingredients'];

    $saladGenerator = new SaladGenerator();
    $result = $saladGenerator->createRandomSalad($ingredients);

    echo "<h3>🥗 Tu Ensalada Aleatoria 🥗</h3>";
    echo $result;
} else {
    echo '<h2>Estructura de control: ForEach.🍎 Generador de Ensalada Aleatoria 🥕</h2>';
    echo '<form method="POST" action="foreach.php">';
    echo '    <label>Introduce ingredientes separados por comas:</label>';
    echo '    <input type="text" name="ingredients" placeholder="Ejemplo: lechuga,tomate,pepino,zanahoria" required>';
    echo '    <button type="submit">🥄 ¡Mezclar Ensalada! 🥄</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../controllers/footer.php"; ?>