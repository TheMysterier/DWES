<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php

            echo "<table>
                <tr>
                    <th>Tabla 1</th>
                    <th>Tabla 2</th>
                </tr>";

            for($i = 0; $i <= 10; ++$i) {
                echo "<tr>
                    <th>" . $i*1 . "</th>
                    <th>" . $i*2 . "</th>
                </tr>";
            }

            echo "</table>";
        ?>
    </body>
</html>