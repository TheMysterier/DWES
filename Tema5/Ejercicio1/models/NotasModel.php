<?php
    class NotasModel extends Database {
        private $id;
        private $usuario_id;
        private $titulo;
        private $descripcion;
        private $fecha;
        private $conn;

        public function __construct($usuario_id=null, $titulo=null, $descripcion=null) {
            $this->conn = parent::conectaDB();

            if(isset($usuario_id)) {
                $this->usuario_id = $usuario_id;
            }

            if(isset($titulo)) {
                $this->titulo = $titulo;
            }

            if(isset($descripcion)) {
                $this->descripcion = $descripcion;
            }

            if(isset($password)) {
                $this->password = $password;
            }
        }

        public function get_all() {
            $consulta = $this->conn->query("SELECT * FROM notas, usuarios WHERE notas.usuario_id=usuarios.id ORDER BY notas.id DESC");
            return $consulta;
        }

        public function get_all_by_id() {
            $consulta = $this->conn->query("SELECT * FROM notas, usuarios WHERE notas.usuario_id=usuarios.id AND usuarios.id='{$this->getUsuario_id()}' ORDER BY notas.id DESC");
            return $consulta;
        }

        public function save() {
            $sql = "INSERT INTO notas VALUES(NULL, '{$this->getUsuario_id()}', '{$this->getTitulo()}', '{$this->getDescripcion()}', CURDATE());";
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

        function getFecha() {
            return $this->fecha;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function getUsuario_id() {
            return $this->usuario_id;
        }

        function setUsuario_id($usuario_id) {
            $this->usuario_id = $usuario_id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }
    }
?>