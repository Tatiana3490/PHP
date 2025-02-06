<?php

class WordFinder
{
    public function findFirstWordStartingWith($words, $letter) {
        foreach ($words as $word) {
            $word = trim($word); // Eliminar espacios en blanco al inicio y final
            if (strtolower(substr($word, 0, 1)) === strtolower($letter)) {
                return "La primera palabra que comienza con '$letter' es: $word";
            }
        }
        return "No se encontró ninguna palabra que comience con '$letter'";
    }
}

?>
