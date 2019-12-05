<?php
    require_once "conecta.php";

    if (isset($_POST['crear'])) {
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $categoria = $_POST['categoria'];
        $nombre = $_POST['nombre'];
        $fecha = getdate();
        $fecha = $fecha['year']."/".$fecha['mon']."/".$fecha['mday'];
        $errors = array();

        if (empty($titulo)) { 
            array_push($errors, "Se requiere el título de la categoría"); 
        }

        if (empty($texto)) { 
            array_push($errors, "Se requiere un texto para la categoría"); 
        }

        $checkingUser = "SELECT id FROM usuarios WHERE nombre='$nombre' LIMIT 1";
        $result = mysqli_query($conexion, $checkingUser);
        $fila = mysqli_fetch_assoc($result);
        $idUser = $fila["id"];

        $checkingCateg = "SELECT id FROM categorias WHERE nombre='$categoria' LIMIT 1";
        $result = mysqli_query($conexion, $checkingCateg);
        $fila = mysqli_fetch_assoc($result);
        $idCategoria = $fila["id"];

        if (count($errors) == 0) {
            $query = "INSERT INTO entradas (usuario_id, categoria_id, titulo, descripcion, fecha) VALUES('$idUser', '$idCategoria', '$titulo', '$texto', '$fecha')";
            mysqli_query($conexion, $query);
            var_dump($query);
            
            header('Location: ../indexUser.php');
        } else {
            $_SESSION['error1'] = $errors;
            header("Location: ../indexUser.php");
        }
    }
?>