<?php
    $servidor="localhost";
    $usuario="root";
    $clave="pestillo";
    $bd="usuarios";

    $conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
    if(mysqli_connect_errno()) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br/>";
        die("Error: ".mysqli_connect_errno());
    }
    mysqli_query($conexion,"SET NAMES 'utf8'");
?>