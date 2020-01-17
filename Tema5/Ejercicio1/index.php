<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>bhkh</title>
    </head>

    <body>
        <?php
            session_start();
            
            require_once 'models/Database.php';
            require_once 'helpers/utils.php';
            require_once 'controllers/UsuariosController.php';
            require_once 'controllers/NotasController.php';

            if(!isset($_GET['c']) || !isset($_GET['a'])) {
                $controlador = new UsuariosController();
                $controlador->index();
            } else {
                $nombre_controlador = $_GET['c'].'Controller';
                if(class_exists($nombre_controlador)) {
                    $controlador = new $nombre_controlador();

                    if(method_exists($controlador, $_GET['a'])) {
                        $action = $_GET['a'];
                        $controlador->$action();
                    } else {
                        echo "La pagina que buscas no existe1";
                    }
                } else {
                    echo "La pagina que buscas no existe2";
                }
            }
        ?>
    </body>
</html>