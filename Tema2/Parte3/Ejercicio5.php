<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <?php
            $n=$_POST["n"];
            $ulCifra = $n % 10;
            $esPar = false;

            if(($n % 2) == 0) {
                $esPar = true;
            }

            for(; $n > 10;) {
                $n = $n / 10;
                $n = (int) $n;
            }

            if($esPar) {
                echo "La primera cifra es $n, la última es $ulCifra y es par";
            } else {
                echo "La primera cifra es $n, la última es $ulCifra y es impar";
            }
        ?>
    </body>
</html>