<?php
    abstract class Animal {
        private $sexo;

        public function __construct($s = "macho") {
            $this->sexo = $s;
        }

        public function __toString() {
            return "Sexo: $this->sexo";
        }

        public function getSexo() {
            return $this->sexo;
        }

        public function setSexo($s) {
            $this->sexo = $s;
        }

        public function maullar() {
            return "Nyaaaa";
        }
    }
?>