<?php

class GradeEvaluator
{
    public function evaluateGrade($grade) {
        if ($grade < 0 || $grade > 10) {
            return "Error: La calificación debe estar entre 0 y 10.";
        } elseif ($grade >= 9) {
            return "Calificación: <strong>$grade</strong>. Excelente desempeño. Has obtenido una <span style='color: green;'>Matrícula de Honor</span>.";
        } elseif ($grade >= 7) {
            return "Calificación: <strong>$grade</strong>. Muy buen trabajo. Has obtenido un <span style='color: blue;'>Notable</span>.";
        } elseif ($grade >= 6) {
            return "Calificación: <strong>$grade</strong>. Buen trabajo. Has obtenido un <span style='color: darkgreen;'>Bien</span>.";
        } elseif ($grade >= 5) {
            return "Calificación: <strong>$grade</strong>. Has aprobado. Tu calificación es <span style='color: orange;'>Suficiente</span>.";
        } else {
            return "Calificación: <strong>$grade</strong>. Lo siento, has <span style='color: red;'>Suspendido</span>. Necesitas mejorar.";
        }
    }
}

?>

