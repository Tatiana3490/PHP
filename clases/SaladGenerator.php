<?php

class SaladGenerator
 {
    private $dressings = ['vinagreta', 'ranch', 'césar', 'miel y mostaza', 'aceite de oliva'];
    private $extras = ['crutones', 'nueces', 'semillas de girasol', 'queso feta', 'pasas'];

    public function createRandomSalad($ingredients) {
        $ingredientList = explode(',', $ingredients);
        $saladItems = [];

        foreach ($ingredientList as $ingredient) {
            $ingredient = trim($ingredient);
            $emoji = $this->getRandomEmoji();
            $saladItems[] = "$emoji $ingredient";
        }

        $dressing = $this->dressings[array_rand($this->dressings)];
        $extra = $this->extras[array_rand($this->extras)];

        $saladString = implode('<br>', $saladItems);
        $result = "$saladString<br>🍶 Aderezo: $dressing<br>✨ Extra especial: $extra";

        return "<div style='background-color: #e6ffe6; padding: 15px; border-radius: 10px;'>$result</div>";
    }

    private function getRandomEmoji() {
        $emojis = ['🥬', '🍅', '🥕', '🥒', '🫑', '🧅', '🫒', '🥑'];
        return $emojis[array_rand($emojis)];
    }
}

?>
