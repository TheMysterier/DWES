<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php

            if(isset($_POST['numeroIntroducido'])) {
                $numeros = (int)$_POST['numeros'];
                $media = (int)$_POST['media'];
                $numeroIntroducido = (int)$_POST['numeroIntroducido'];

                ++$numeros;
            } else {
                $numeros = 0;
                $media = 0;
                $numeroIntroducido = 0;
            }

            if($numeroIntroducido < 0) {
                --$numeros;
                $media /= $numeros;

                echo "La media es $media";
            } else {
                $media += $numeroIntroducido;

                require_once 'introducir3.php';
            }
        ?>
    </body>
</html>