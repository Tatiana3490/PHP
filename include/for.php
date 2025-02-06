<?php include_once "../include/header.php";

require_once '../clases/EmojiGenerator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'])) {
    $quantity = (int)$_POST['quantity'];

    $emojiGenerator = new EmojiGenerator();
    $result = $emojiGenerator->generateEmojiSequence($quantity);

    echo "<h3>Resultado:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: For.🎉 Generador Mágico de Emojis 🎊</h2>';
    echo '<form method="POST" action="for.php">';
    echo '    <label>¿Cuántos emojis quieres generar? (1-20)</label>';
    echo '    <input type="number" name="quantity" min="1" max="20" required>';
    echo '    <button type="submit">✨ Generar Emojis ✨</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../include/footer.php"; ?>