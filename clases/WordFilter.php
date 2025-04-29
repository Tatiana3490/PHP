<?php

class WordFilter
{
    public function filterWordsWithoutLetter($words, $letter) {
        $filteredWords = [];
        $letter = strtolower($letter);

        foreach ($words as $word) {
            $word = trim($word);
            if (strpos(strtolower($word), $letter) === false) {
                $filteredWords[] = $word;
                continue;
            }
        }

        if (empty($filteredWords)) {
            return "Todas las palabras contienen la letra '$letter'.";
        } else {
            $result = implode(", ", $filteredWords);
            return "Palabras que no contienen la letra '$letter': 
            $result";
        }
    }
}
?>
