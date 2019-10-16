<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
            $n=$_POST["n"];
            $ulCifra = $n % 10;

            for(; $n > 10;) {
                $n = $n / 10;
                $n = (int) $n;
            }

            echo "La primera cifra es $n y la última es $ulCifra";
        ?>
    </body>
</html>