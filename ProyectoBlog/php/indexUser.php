<!DOCTYPE html>
<?php
    include "helpers/errores.php";
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
            require_once "insertado/nav.php";
        ?>

        <div class="row">
            <div class="col-7">
                <section>
                    <?php
                        if(isset($_POST["makeCategory"])) {
                            require_once "herramientas/crearCategoria.php";
                        } else if(isset($_POST["makeEntrada"])) {
                            require_once "herramientas/crearEntrada.php";
                        } else if(isset($_POST["verEntradas"])) {
                            require_once "herramientas/verEntradas.php";
                        } else if(isset($_POST["editData"])) {
                            require_once "herramientas/editarDatos.php";
                        } else if(isset($_GET["errorCategoria"])) {
                            $_SESSION["error3"] = $_GET["errorCategoria"];
                            error3();
                            require_once "herramientas/crearCategoria.php";
                        } else if(isset($_GET["editarId"])) {
                            require_once "herramientas/crearEntrada.php";
                        } else if(isset($_POST["buscar"])) {
                            require_once "herramientas/busqueda.php";
                        } else if(isset($_GET["idCateg"])) {
                            require_once "herramientas/verEntradas.php";
                        } else {
                            require_once "herramientas/botonera.php";
                        }
                    ?>
                </section>
            </div>

            <div class="col-4">
                <aside>
                    <?php
                        require_once "insertado/asideHerramientas.php";
                    ?>
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