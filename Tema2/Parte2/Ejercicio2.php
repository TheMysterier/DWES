<?php
    $x=(int)$_POST['x'];
    $y=(int)$_POST['y'];
    $sum=$x+$y;
    $res=$x-$y;
    $prod=$x*$y;
    $div=$x/$y;

    echo "X: $x<br/>";
    echo "Y: $y<br/>";
    echo "Suma: $sum<br/>";
    echo "Resta: $res<br/>";
    echo "Producto: $prod<br/>";
    echo "División: $div<br/>";
?>