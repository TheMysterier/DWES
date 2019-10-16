<!DOCTYPE html>
<html lang=”es”>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $n1=$_POST["n1"];
            $n2=$_POST["n2"];
            $n3=$_POST["n3"];
            $cad="";
            $aux;

            if($n1 > $n2 && $n1 > $n3) {
                $cad += $n1;
            } else {
                if($n1 > $n2 && $n1 < $n3) {
                    if($n3 > $n2) {
                        $aux += $n3.">";
                        $aux += $n1.">";
                        $aux += $n2;
                    }
                } else {
                    if($n1 < $n2) {
                        $aux += $n3.">";
                        $aux += $n1.">";
                        $aux += $n2;
                    }
                }
            }

            echo "Has ganado $salario €";
        ?>
    </body>
</html>