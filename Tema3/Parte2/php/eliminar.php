<?php
    include 'conecta.php';

    $sql="delete from coches where id=".$_GET['id'];
    $resultado = mysqli_query($conexion,$sql); 
    header("Location:listarCoches.php");

    mysqli_close($conexion);
?>