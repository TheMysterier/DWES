<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Acceso</title>
    </head>
    <body>
    <?php
        $numeroSecreto = 9638;

        if (isset($_POST['oportunidades']) && isset($_POST['numeroIntroducido'])){
            $numeroIntroducido = (int)$_POST['numeroIntroducido'];
            $oportunidades = (int)$_POST['oportunidades'];
        }else {
            $numeroIntroducido=0;
            $oportunidades = 4;
        }

        if ($numeroIntroducido == $numeroSecreto) {
            echo "<h1>Felicidades, eres rico.</h1>";
        } else {
            if ($oportunidades == 0) {
                echo "<h1>Too late, has gastado los intentos.</h1>";
            } else {
                if ($numeroIntroducido==0){
                    echo"<h1> Buenas, tengo un millón de euros dentro, intenta entrar si puedes. Tienes $oportunidades oportunidades para acertar un número.</h1>";
                    require_once 'Ejercicio2.php';
                }else {
                    $oportunidades--;

                    if ($numeroSecreto != $numeroIntroducido){
                        echo "<h1>Uyyyyy, casiiii.</h1>";
                    }

                    require_once 'Ejercicio2.php';
                }
            }
        }
    ?>
    </body>
</html>