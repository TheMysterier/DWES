<?php
    require_once("models/OfertasModel.php");
    class OfertaController {
        public function index() {
            require_once("models/OfertasModel.php");

            $oferta = new OfertasModel();
            $todasOfertas = $oferta->getOfertas();

            require_once("views/ListadoView.phtml");
        }

        public function BorrarOferta() {
            if(!isset($_GET['id'])) {
                require_once 'views/ListadoView.phtml';
            } else {
                $id = $_GET['id'];

                $oferta = new OfertasModel();
                $oferta->setId($id);
                $delete = $oferta->delete();

                if($delete) {
                    $_SESSION['remove'] = "complete";
                } else {
                    $_SESSION['remove'] = "failed";
                }

                $this->index();
            }
        }

        public function NuevaOferta() {
            if(isset($_GET['form'])) {
                require_once 'views/RegistroView.phtml';
            } elseif(isset($_GET['id'])) {
                $id = $_GET['id'];
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $imagen = isset($_FILES['imagen']) ? $filename : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;

                if($titulo && $descripcion) {
                    if($imagen) {
                        $oferta = new OfertasModel($titulo, $imagen, $descripcion);
                        $oferta->setId($id);
                        $save = $oferta->modificar();

                    } else {
                        $oferta = new OfertasModel($titulo, null, $descripcion);
                        $oferta->setId($id);
                        $save = $oferta->modificar();
                    }

                    if($save) {
                        $_SESSION['insert'] = "inserted";
                    } else {
                        $_SESSION['insert'] = "not inserted";
                    }
                } else {
                    $_SESSION['insert'] = "not inserted";
                }

                header("Location:index.php?c=Oferta&a=NuevaOferta");

            } else {
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                
                $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : false;
                $imagen = isset($_FILES['imagen']) ? $filename : false;
                $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;

                
                if($imagen && $titulo && $descripcion) {
                    $oferta = new OfertasModel($titulo, $imagen, $descripcion);
                    $save = $oferta->insert();

                    if($save) {
                        $_SESSION['insert'] = "inserted";
                    } else {
                        $_SESSION['insert'] = "not inserted";
                    }
                } else {
                    $_SESSION['insert'] = "not inserted";
                }

                header("Location:index.php?c=Oferta&a=index");
            }
        }

        public function GrabarOferta() {
            if(isset($_FILES['imagen'])) {
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif") {
                    if(!is_dir("uploads/img")) {
                        mkdir("uploads/img", 0777, true);
                    }

                    move_uploaded_file($file['tmp_name'], "uploads/img/".$filename);
                }

                $this->NuevaOferta();
            } else {
                $this->NuevaOferta();
            }
        }

        public function Modificar() {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];

                $oferta = new OfertasModel();
                $oferta->setId($id);
                $ofertas = $oferta->getOfertasById();

                require_once "views/RegistroView.phtml";
            } else {
                header("Location:index.php?c=Oferta&a=index");
            }
        }
    }
?>