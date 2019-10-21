<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 9</title>
    </head>
    <body>
        <?php
            $n = $_POST["n"];
            $esPrimo = true;
            
            for($i = 2; $i < $n; ++$i) {
                if(($n % $i) == 0) {
                    $esPrimo = false;
                }
            }

            if($esPrimo) {
                echo "Es primo";
            } else {
                echo "No es primo";
            }
        ?>
    </body>
</html>