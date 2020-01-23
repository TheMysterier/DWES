<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzeria </title>
    </head>

    <body>
        <h1>Pizzeria Passione</h1>
        
        <?php
            session_start();
            
            require_once 'models/PizzeriaBD.php';
            require_once 'controllers/OfertaController.php';

            if(!isset($_GET['c']) || !isset($_GET['a'])) {
                $controlador = new OfertaController();
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