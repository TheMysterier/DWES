<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 10</title>
    </head>
    <body>
        <?php
            $n1 = $_POST["n1"];
            $n2 = $_POST["n2"];
            
            echo "Los impares entre ambos numeros son ";
            for($i = ($n1 + 1); $i < $n2; ++$i) {
                if(($i % 2) != 0) {
                    echo $i . " - ";
                }
            }
        ?>
    </body>
</html>