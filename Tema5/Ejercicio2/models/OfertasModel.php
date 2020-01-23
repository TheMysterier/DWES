<?php
    class OfertasModel extends Database {
        private $id;
        private $titulo;
        private $imagen;
        private $descripcion;
        private $conn;

        public function __construct($titulo=null, $imagen=null, $descripcion=null) {
            $this->conn = parent::conectaDB();

            if(isset($titulo)) {
                $this->titulo = $titulo;
            }

            if(isset($imagen)) {
                $this->imagen = $imagen;
            }

            if(isset($descripcion)) {
                $this->descripcion = $descripcion;
            }
        }

        public function getOfertas() {
            $consulta = $this->conn->query("SELECT * FROM oferta ORDER BY id DESC");
            return $consulta;
        }

        public function getOfertasById() {
            $consulta = $this->conn->query("SELECT * FROM oferta WHERE id='{$this->getId()}' ORDER BY id DESC");
            return $consulta;
        }

        public function insert() {
            $sql = "INSERT INTO oferta VALUES(NULL, '{$this->getTitulo()}', '{$this->getImagen()}', '{$this->getDescripcion()}');";
            $save = $this->conn->exec($sql);
            $result = false;

            if($save) {
                $result = true;
            }

            return $result;
        }

        public function delete() {
            $sql = "DELETE FROM oferta WHERE id = {$this->getId()};";
            $save = $this->conn->exec($sql);
            $result = false;

            if($save) {
                $result = true;
            }

            return $result;
        }

        public function modificar() {
            if($this->getImagen() != null) {
                $sql = "UPDATE oferta SET titulo = '{$this->getTitulo()}', imagen = '{$this->getImagen()}', descripcion = '{$this->getDescripcion()}' WHERE id = '{$this->getId()}';";
            } else {
                $sql = "UPDATE oferta SET titulo = '{$this->getTitulo()}', descripcion = '{$this->getDescripcion()}' WHERE id = '{$this->getId()}';";
            }
            
            $save = $this->conn->exec($sql);
            $result = false;

            if($save) {
                $result = true;
            }

            return $result;
        }

        function getId() {
            return $this->id;
        }

        function setId($id) {
            $this->id = $id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function getImagen() {
            return $this->imagen;
        }

        function setImagen($imagen) {
            $this->imagen = $imagen;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    }
?>