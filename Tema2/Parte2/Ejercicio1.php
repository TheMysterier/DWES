<?php
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $direccion=$_POST['direccion'];
    $edad=(int)$_POST['edad'];
    $telf=$_POST['telefono'];

    echo "<span style='color:red'>Nombre:</span> $nombre<br/>";
    echo "<span style='color:blue'>Apellidos: </span>$apellidos<br/>";
    echo "<span style='color:yellow'>Dirección:</span> $direccion<br/>";
    echo "<span style='color:green'>Edad: </span>$edad<br/>";
    echo "<span style='color:grey'>Teléfono:</span> $telf<br/>";
?>