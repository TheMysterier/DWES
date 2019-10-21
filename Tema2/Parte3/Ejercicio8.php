<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 8</title>
    </head>
    <body>
        <?php
            $numero = $_POST["n"];
            $n1 = 0;
            $n2 = 1;
            $aux;

            if($numero == 1) {
                echo $n1;
            }

            if($numero == 2) {
                echo $n2;
            }

            if($numero > 2) {
                for($i = 2; $i < $numero; ++$i) {
                    $aux = $n1 + $n2;
                    $n1 = $n2;
                    $n2 = $aux;
                }

                echo $aux;
            }
        ?>
    </body>
</html>