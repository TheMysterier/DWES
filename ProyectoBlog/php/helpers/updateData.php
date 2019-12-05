<?php
    require_once "../helpers/conecta.php";

    if (isset($_POST['actualizar'])) {
        $nuevoNombre = $_POST['nuevoNombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];

        if (empty($nuevoNombre)) { 
            array_push($errors, "Se requiere el nombre de usuario"); 
        }

        if (empty($apellidos)) { 
            array_push($errors, "Se requiere los apellidos del usuario"); 
        }

        if (empty($email)) { 
            array_push($errors, "Se requiere el email del usuario"); 
        }

        if (count($errors) == 0) {
            $query = "UPDATE usuarios SET nombre='$nuevoNombre', apellidos='$apellidos', email='$email' WHERE nombre='$nombre'";
            mysqli_query($conexion, $query);

            session_destroy();
            session_start();

            $_SESSION['username'] = $nuevoNombre;
            
            header('Location: ../indexUser.php');
        } else {
            $_SESSION['error1'] = $errors;
            header("Location: ../indexUser.php");
        }
    }
?>