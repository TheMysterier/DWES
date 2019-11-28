<?php 
    session_start();
    include 'errores.php';
    if(isset($_SESSION["username"])) {
        $_SESSION["username"] = null;
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/estilos.css">
	
		<title>Inicio</title>
	  </head>
<body>
    <header><img src="http://www.maredu.com.br/wp-content/uploads/2017/09/banner-maredu-1.jpg" width="100%" height="200px"></header>
    <?php 
     	require_once 'conecta.php';
    ?>

    <div class="row">
      	<div class="col-lg-6">
      		<div class="header">
  	            <h2>Register</h2>
            </div>
	
            <form id="form1" method="post" action="cuenta.php">
                <?php
                    error1();
                ?>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nombre: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="text" name="username" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Apellidos: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="text" name="apellidos" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Edad: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="number" name="edad" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="email" name="email" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Dirección: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="text" name="direccion" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Contraseña: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="password" name="password1" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Confirmar contraseña: </label>

                    <div class="col-sm-10">
                        <input class='campoRegis' size="40px" type="password" name="password2" required>
                    </div>
                </div>

                <div class="formulario">
                    <button id='registrarse' type="submit" class="btn" name="reg_user">Registrarse</button>
                </div>
            </form>
      	</div>
    
      
        <div class="col-lg-6">
            <div class="header">
                <h2>Login</h2>
            </div>

            <form method="post" action="cuenta.php">
                <?php
                    error2();
                ?>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nombre: </label>

                    <div class="col-sm-10">
                        <input type="text" name="username" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Contraseña: </label>

                    <div class="col-sm-10">
                        <input type="password" name="password" required>
                    </div>
                </div>

                <div class="formulario">
                    <button id='registrarse' type="submit" class="btn" name="login_user">Login</button>
                </div>
            </form>
        </div>
    
    </div>
    
    <?php 
        require_once 'footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>