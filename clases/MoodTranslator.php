<?php

class MoodTranslator
{
    public function translateMood($mood) {
        switch ($mood) {
            case 'happy':
                return "😄 ¡Estás más brillante que un emoji con gafas de sol!";
            case 'sad':
                return "😢 Tranquilo, hasta los payasos se ponen tristes a veces.";
            case 'angry':
                return "😠 Respira... ¡Eres más cool que tu enfado!";
            case 'tired':
                return "😴 Si la pereza fuera un deporte, serías campeón olímpico.";
            case 'excited':
                return "🤩 ¡Tienes más energía que una ardilla con café!";
            default:
                return "🤔 Tu humor es tan misterioso como un calcetín perdido.";
        }
    }
}

?>
