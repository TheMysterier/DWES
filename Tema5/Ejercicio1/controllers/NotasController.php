<?php
    require_once("models/NotasModel.php");
    class NotasController {
        public function index() {
            require_once("views/usuario/Principal.phtml");
        }

        public function ListarTodasNotas() {
            require_once("models/NotasModel.php");
            
            $nota = new NotasModel();
            $todasNotas = $nota->get_all();

            require_once("views/nota/listarTodasNotas.phtml");
        }

        public function seeNotas(){
            $id = $_GET['id'];

            $nota = new NotasModel();
            $nota->setUsuario_id($id);
            $todasNotas = $nota->get_all_by_id();

            require_once("views/nota/listarTodasNotas.phtml");
        }

        public function save() {
            if(!isset($_POST['submit'])) {
                require_once 'views/nota/insertarNotas.phtml';
            } else {
                $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
                
                if($usuario && $titulo && $descripcion) {
                    $nota = new NotasModel($usuario, $titulo, $descripcion);
                    $save = $nota->save();

                    if($save) {
                        $_SESSION['insert'] = "inserted";
                    } else {
                        $_SESSION['insert'] = "not inserted";
                    }
                } else {
                    $_SESSION['insert'] = "not inserted";
                }

                header("Location:index.php?c=Notas&a=save");
            }
        }
    }
?>