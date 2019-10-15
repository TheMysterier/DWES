<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
            define('pi', 3.14159265);
            $radio="12";
            $area=pi*($radio*$radio);
            $longi=2*pi*$radio;

            echo "La longitud es $longi cm y el area $area cm.<br/>";
        ?>
    </body>
</html>