<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php

            echo "Los múltiplos de 5 son: ";
            for($i = 0; $i <= 100; ++$i) {
                if(($i % 5) == 0) {
                    echo $i;
                    echo " - ";
                }
            }
        ?>
    </body>
</html>