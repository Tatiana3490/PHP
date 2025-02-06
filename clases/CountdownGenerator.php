<?php

class CountdownGenerator
{
    public function generateCountdown($start) {
        $start = max(1, $start); // Para que el número inicial sea al menos el numero 1
        $countdown = [];

        do {
            $countdown[] = $start;
            $start--;
        } while ($start >= 0);

        $countdownString = implode(', ', $countdown);
        return "Cuenta regresiva: $countdownString, ¡Despegue!";
    }
}

?>
