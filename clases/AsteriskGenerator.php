<?php

class AsteriskGenerator
{
    public function generateAsterisks($length) {
        $asterisks = '';
        $count = 0;

        while ($count < $length) {
            $asterisks .= '*';
            $count++;
        }

        return "Cadena de $length asteriscos: $asterisks";
    }
}

?>
