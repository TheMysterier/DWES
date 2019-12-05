<?php
    require_once "../helpers/conecta.php";

    if (isset($_POST['crear'])) {
        $nombre = $_POST['nombre'];
        $errors = array();

        if (empty($nombre)) { 
            array_push($errors, "Se requiere el nombre de la categoría"); 
        }

        $checkingCateg = "SELECT * FROM categorias WHERE nombre='$nombre' LIMIT 1";
        $result = mysqli_query($conexion, $checkingCateg);
        $categorias = mysqli_fetch_assoc($result);

        if ($categorias) {
            if ($categorias['nombre'] === $nombre) {
                array_push($errors, "Categoría existente.");
            }
        }

        if (count($errors) == 0) {
            $query = "INSERT INTO categorias (nombre) VALUES('$nombre')";
            mysqli_query($conexion, $query);
            
            header('Location: ../indexUser.php');
        } else {
            $_SESSION['error3'] = $errors;
            var_dump(serialize($errors));
            header("Location: ../indexUser.php?errorCategoria");
        }
    }
?>