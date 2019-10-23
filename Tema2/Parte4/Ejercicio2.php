<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            echo "<form action='acceso.php' method='post'>
                    <input type='hidden' name='oportunidades' value=' $oportunidades '>
                    <input type='number' name='numeroIntroducido'>
                    <input type='submit' value='Continuar'>
                </form>"
        ?>
    </body>
</html>