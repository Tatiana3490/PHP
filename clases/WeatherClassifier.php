<?php

class WeatherClassifier
{
    public function classifyWeather($temperature) {
        if ($temperature > 30) {
            return "Hace mucho calor! ☀️🔥 Recuerda mantenerte hidratado.";
        } elseif ($temperature > 20) {
            return "El clima es agradable. 😎 Perfecto para actividades al aire libre.";
        } elseif ($temperature > 10) {
            return "Está un poco fresco. 🍃 Considera llevar una chaqueta ligera.";
        } elseif ($temperature > 0) {
            return "Hace frío. ❄️ Abrígate bien.";
        } else {
            return "Está helando! 🥶 Quédate en casa si puedes.";
        }
    }
}

?>
