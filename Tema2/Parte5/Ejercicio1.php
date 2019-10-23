<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php

            $cad = array(rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10), rand(0, 10));
            mostrarArray($cad, 8);
            mostrarArray(menosArray($cad, 7), 7);
            mostrarArray(ordenaArray($cad, 8), 8);

            echo count($cad)."  ";
            echo array_search(2, $cad);

            function mostrarArray($cad, $num) {
                for($i = 0; $i < $num; ++$i) {
                    echo $cad[$i]." ";
                }

                echo " --- ";
            }

            function menosArray($cad, $num) {
                $cad2 = new SplFixedArray(7);

                for($i = 0; $i < $num; ++$i) {
                    $cad2[$i] = $cad[$i];
                }

                return $cad2;
            }

            function ordenaArray($cad, $num) {

                for($i = 0; $i < $num; ++$i) {
                    for($j = 0; $j < $num; ++$j) {
                        if($cad[$i] > $cad[$j]) {
                            $aux = $cad[$i];
                            $cad[$i] = $cad[$j];
                            $cad[$j] = $aux;
                        }
                    }
                }

                return $cad;
            }

            function volteaArray($cad, $num) {
                $cad2;

                for($i = $num - 1; $i >= 0; --$i) {
                    $cad2[] = $cad[$i];
                }

                return $cad2;
            }
        ?>
    </body>
</html>