<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $hora=$_POST["hora"];

            if($hora <= 40) {
                $salario = $hora * 12;
            } else {
                $hora2 = $hora - 40;
                $hora -= $hora2;
                $salario = ($hora * 12) + ($hora2 * 16);
            }

            echo "Has ganado $salario €";
        ?>
    </body>
</html>