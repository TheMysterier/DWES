<?php
    class UsuariosModel extends Database {
        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $fecha;
        private $conn;

        public function __construct($nombre=null, $apellidos=null, $email=null, $password=null) {
            $this->conn = parent::conectaDB();

            if(isset($nombre)) {
                $this->nombre = $nombre;
            }

            if(isset($apellidos)) {
                $this->apellidos = $apellidos;
            }

            if(isset($email)) {
                $this->email = $email;
            }

            if(isset($password)) {
                $this->password = $password;
            }
        }

        public function get_all() {
            $consulta = $this->conn->query("SELECT * FROM usuarios ORDER BY id DESC");
            return $consulta;
        }

        public function save() {
            $sql = "INSERT INTO usuarios VALUES(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', CURDATE());";
            $save = $this->conn->exec($sql);
            $result = false;

            if($save) {
                $result = true;
            }

            return $result;
        }

        public function delete() {
            $sql = "DELETE FROM usuarios WHERE id = {$this->getId()};";
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

        function getNombre() {
            return $this->nombre;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function getApellidos() {
            return $this->apellidos;
        }

        function setApellidos($apellidos) {
            $this->apellidos = $apellidos;
        }

        function getEmail() {
            return $this->email;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function getPassword() {
            return $this->password;
        }

        function setPassword($password) {
            $this->password = $password;
        }
    }
?>