<?php
    require_once "../helpers/conecta.php";

    if (isset($_POST['actualizar'])) {
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $categoria = $_POST['categoria'];
        $idEntrada = $_POST['idEntrada'];
        $errors = array();

        if (empty($titulo)) { 
            array_push($errors, "Se requiere el título de la categoría"); 
        }

        if (empty($texto)) { 
            array_push($errors, "Se requiere un texto para la categoría"); 
        }

        $checkingCateg = "SELECT id FROM categorias WHERE nombre='$categoria' LIMIT 1";
        $result = mysqli_query($conexion, $checkingCateg);
        $fila = mysqli_fetch_assoc($result);
        $idCategoria = $fila["id"];

        if (count($errors) == 0) {
            $query = "UPDATE entradas SET categoria_id='$idCategoria', titulo='$titulo', descripcion='$texto' WHERE id='$idEntrada'";
            mysqli_query($conexion, $query);
            
            header('Location: ../indexUser.php');
        } else {
            $_SESSION['error1'] = $errors;
            header("Location: ../indexUser.php");
        }
    }
?>