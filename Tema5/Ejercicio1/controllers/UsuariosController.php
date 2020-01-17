<?php
    require_once("models/UsuariosModel.php");
    class UsuariosController {
        public function index() {
            require_once("views/usuario/Principal.phtml");
        }

        public function TodosUsuarios() {
            require_once("models/UsuariosModel.php");

            $usuario = new UsuariosModel();
            $todosUsuarios = $usuario->get_all();

            require_once("views/usuario/TodosUsuariosView.phtml");
        }

        public function save() {
            if(!isset($_POST['submit'])) {
                require_once 'views/usuario/CreateUserView.phtml';
            } else {
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
                $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
                $email = isset($_POST['email']) ? $_POST['email'] : false;
                $password = isset($_POST['password']) ? $_POST['password'] : false;
                
                if($nombre && $apellidos && $email && $password) {
                    $usuario = new UsuariosModel($nombre, $apellidos, $email, $password);
                    $save = $usuario->save();

                    if($save) {
                        $_SESSION['register'] = "complete";
                    } else {
                        $_SESSION['register'] = "failed";
                    }
                } else {
                    $_SESSION['register'] = "failed";
                }

                header("Location:index.php?c=Usuarios&a=save");
            }
        }

        public function delete() {
            if(!isset($_GET['id'])) {
                require_once 'views/usuario/TodosUsuariosView.phtml';
            } else {
                $id = $_GET['id'];

                $usuario = new UsuariosModel();
                $usuario->setId($id);
                $delete = $usuario->delete();

                if($delete) {
                    $_SESSION['remove'] = "complete";
                } else {
                    $_SESSION['remove'] = "failed";
                }

                $this->TodosUsuarios();
            }
        }
    }
?>