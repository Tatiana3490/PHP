<?php

class EmojiGenerator
{
    private $emojis = [
        '😀', '🚀', '🍕', '🎮', '🌈',
        '🐶', '🍦', '🎸', '🚲', '🍩',
        '🤖', '🌍', '🍣', '🎳', '🚁',
        '🍭', '🎢', '🐱', '🍔', '🌋'
    ];

    public function generateEmojiSequence($quantity) {
        $quantity = max(1, min(20, $quantity)); // Limitar entre 1 y 20
        $sequence = [];

        for ($i = 0; $i < $quantity; $i++) {
            $randomEmoji = $this->emojis[array_rand($this->emojis)];
            $sequence[] = $randomEmoji;
        }

        $emojiString = implode(' ', $sequence);
        return "¡Aquí tienes tu secuencia mágica de emojis! 🎲<br>$emojiString";
    }
}

?>
