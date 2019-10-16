<?php
    define('pi', 3.14159265);
    $radio=(float)$_POST["radio"];
    $area=pi*($radio*$radio);
    $longi=2*pi*$radio;

    echo "La longitud es $longi cm y el area $area cm.<br/>";
?>