<?php
    include_once "Animal.php";

    class Gato extends Animal {
        private $raza;

        public function __construct($sexo, $r = "atigrada") {
            parent:: __construct($sexo);
            $this->raza = $r;
        }

        public function __toString() {
            return parent:: __toString() . "<br>Raza: $this->$raza";
        }

        public function getSexo() {
            return $this->raza;
        }

        public function setSexo($r) {
            $this->raza = $r;
        }

        public function maullar() {
            return "Nyaaaa";
        }
    }
?>