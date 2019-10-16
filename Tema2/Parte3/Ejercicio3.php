<?php
    $nota1=(float)$_POST["nota1"];
    $nota2=(float)$_POST["nota2"];
    $nota3=(float)$_POST["nota3"];

    $notaFinal = ($nota1 + $nota2 + $nota3) / 3;

    if($notaFinal >= 0 && $notaFinal <= 4) {
        echo "Insuficiente.";
    }

    if($notaFinal >= 5 && $notaFinal <= 6) {
        echo "Suficiente";
    }

    if($notaFinal >= 7 && $notaFinal <= 8) {
        echo "Notable.";
    }

    if($notaFinal >= 9 && $notaFinal <= 10) {
        echo "Sobresaliente.";
    }
?>