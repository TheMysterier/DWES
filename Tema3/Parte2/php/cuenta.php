<?php
    session_start();

    $username = "";
    $email    = "";
    $errors = array(); 

    require_once 'conecta.php';

    if (isset($_POST['reg_user'])) {
        $username = $_POST['username'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $direccion = $_POST['direccion'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];

        if (empty($username)) { 
            array_push($errors, "Se requiere el nombre de usuario"); 
        }

        if (empty($apellidos)) { 
            array_push($errors, "Se requieren los apellidos del usuario"); 
        }

        if (empty($edad)) { 
            array_push($errors, "Se requiere la edad del usuario"); 
        }

        if (empty($email)) { 
            array_push($errors, "Se requiere el email del usuario"); 
        }

        if (empty($direccion)) { 
            array_push($errors, "Se requiere la direccion del usuario"); 
        }

        if (empty($password1)) {
            array_push($errors, "Se requiere una contraseña"); 
        }
        if ($password1 != $password2) {
            array_push($errors, "Las dos contraseñas no coinciden");
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

            $query = "INSERT INTO usuarios (nombre, apellidos, password, edad, email, direccion) VALUES('$username', '$apellidos', '$password', '$edad', '$email', '$direccion')";
            mysqli_query($conexion, $query);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Registrado satisfactoriamente";
            header('location: index.php');
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
                $_SESSION['success'] = "Logeado satisfactoriamente";
                header('location: listarCoches.php');
            } else {
                array_push($errors, "Usuario o contraseña incorrectos");
            }
        }
    }

?>