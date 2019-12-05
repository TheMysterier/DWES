<?php
    require_once "../helpers/conecta.php";

    if (isset($_GET['id'])) {
        $idEntrada = $_GET['id'];

        $query = "delete from entradas where id='$idEntrada'";
        mysqli_query($conexion, $query);

        header('Location: ../indexUser.php');
    }
?>