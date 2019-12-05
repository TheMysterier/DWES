<!DOCTYPE html>
<?php 
    session_start();
    include 'helpers/errores.php';
    if(isset($_SESSION["username"])) {
        $_SESSION["username"] = null;
        session_destroy();
    }
?>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/estilos.css">
        <title>Inicio</title>
    </head>

    <body>
        <header>
            <a href="indexUser.php"><h1>InterG<img id="imagen" src="https://image.flaticon.com/icons/png/512/65/65687.png" width="50px" height="50px"/>ming</h1></a>
        </header>

        <?php 
     	    require_once 'helpers/conecta.php';
        ?>

        <?php
            require_once "insertado/nav.php";
        ?>

        <div class="row">
            <div class="col-7">
                <section>
                    <h1 class="titulos">Últimas entradas</h1>
                    <div id="verEntradas">
                        <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit">Ver todas las entradas</button>
                    </div>
                </section>
            </div>

            <div class="col-4">
                <aside>
                    <div id="buscar">
                        <h3 class="titulos">Buscar</h3>
                        <form id="buscarForm" class="form-inline">
                            <input class="form-control mr-sm-2" type="text">
                            <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit">Buscar</button>
                        </form>
                    </div>

                    <div  id="logging">
                        <h3 class="titulos">Logearse</h3>
                        <form id="logearse" class="form-inline" method="post" action="helpers/cuenta.php">
                            <?php
                                error2();
                            ?>

                            <input class="form-control mr-sm-2" type="text" placeholder="Nombre de usuario" name="username" required>
                            <input class="form-control mr-sm-2" type="password" placeholder="Contraseña" name="password" required>
                            <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit" name="login_user">Aceptar</button>
                        </form>
                    </div>
                    
                    <div  id="registrar">
                        <h3 class="titulos">Registrarse</h3>
                        <form id="registrarse" class="form-inline" method="post" action="helpers/cuenta.php">
                            <?php
                                error1();
                            ?>

                            <input class="form-control mr-sm-2" type="text" placeholder="Nombre" name="username" required>
                            <input class="form-control mr-sm-2" type="text" placeholder="Apellidos"  name="apellidos" required>
                            <input class="form-control mr-sm-2" type="email" placeholder="Email" name="email" required>
                            <input class="form-control mr-sm-2" type="password" placeholder="Contraseña" name="password" required>

                            <div id="botonera">
                                <button class="btn btn-outline-success my-2 my-sm-0 botones" type="submit" name="reg_user">Aceptar</button>
                                <input class="btn btn-outline-success my-2 my-sm-0 botones" type="reset"/>
                            </div>
                            
                        </form>
                    </div>
                </aside>
            </div>
        </div>

        <?php
            require_once "insertado/footer.php";
        ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>