<?php include_once "../include/header.php";

require_once '../clases/MoodTranslator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mood'])) {
    $mood = $_POST['mood'];

    $moodTranslator = new MoodTranslator();
    $result = $moodTranslator->translateMood($mood);

    echo "<h3>Traducción de tu Humor:</h3>";
    echo "<p>$result</p>";
} else {
    echo '<h2>Estructura de control: Switch.🤪 Traductor de Humor 🎭</h2>';
    echo '<form method="POST" action="switch.php">';
    echo '    <label>¿Cómo te sientes hoy?</label>';
    echo '    <select name="mood" required>';
    echo '        <option value="happy">Feliz</option>';
    echo '        <option value="sad">Triste</option>';
    echo '        <option value="angry">Enfadado</option>';
    echo '        <option value="tired">Cansado</option>';
    echo '        <option value="excited">Activo</option>';
    echo '    </select>';
    echo '    <button type="submit">Traducir Humor</button>';
    echo '</form>';
}
?>

<br>
<br>
<form action="index.php" method="get">
    <button type="submit">Volver al índice</button>
</form>

<?php include_once "../include/footer.php"; ?>
