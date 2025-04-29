<?php

class EvaluadorDeNumero {
    // Método para evaluar el número
    public function evaluadorDeNumero($numero) {
        if ($numero > 0){
            return "El número <strong>{$numero}</strong>  es <span style='color: green;'>positivo</span>.";

        }elseif ($numero < 0) {
            return  "El número <strong>{$numero}</strong>  es <span style='color: red;'>negativo</span>.";
        }else{
            return "El número es <strong>cero</strong>.";
        }
    }

}
?>