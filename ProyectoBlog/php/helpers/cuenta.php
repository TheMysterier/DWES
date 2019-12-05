<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    $username = "";
    $email    = "";
    $errors = array(); 

    require_once 'conecta.php';

    if (isset($_POST['reg_user'])) {
        $username = $_POST['username'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $fecha = getdate();
        $fecha = $fecha['year']."/".$fecha['mon']."/".$fecha['mday'];

        if (empty($username)) { 
            array_push($errors, "Se requiere el nombre de usuario"); 
        }

        if (empty($apellidos)) { 
            array_push($errors, "Se requieren los apellidos del usuario"); 
        }

        if (empty($email)) { 
            array_push($errors, "Se requiere el email del usuario"); 
        }

        if (empty($password1)) {
            array_push($errors, "Se requiere una contraseña"); 
        }

        $checkingUser = "SELECT * FROM usuarios WHERE nombre='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conexion, $checkingUser);
        $user = mysqli_fetch_assoc($result);
    
        if ($user) {
            if ($user['nombre'] === $username) {
                array_push($errors, "El nombre de usuario ya existe");
            }

            if ($user['email'] === $email) {
                array_push($errors, "El email ya fue registrado");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password1);

            $query = "INSERT INTO usuarios (nombre, apellidos, email, password, fecha) VALUES('$username', '$apellidos', '$email', '$password', '$fecha')";
            mysqli_query($conexion, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Registrado satisfactoriamente";
            header('location: ../index.php');
        } else {
            $_SESSION['error1'] = $errors;
            header("Location: ../index.php");
        }
    }

    if (isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            array_push($errors, "Se requiere el nombre de usuario");
        }

        if (empty($password)) {
            array_push($errors, "Se requiere una contraseña");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM usuarios WHERE nombre='$username' AND password='$password'";
            $results = mysqli_query($conexion, $query);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['username'] = $username;
                header('location: ../indexUser.php');
            } else {
                array_push($errors, "Usuario o contraseña incorrectos");
                $_SESSION['error2'] = $errors;
                header("Location: ../indexUser.php");
            }
        }
    }

?>