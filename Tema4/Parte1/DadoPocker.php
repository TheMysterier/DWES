<?php
    class DadoPocker {
        private $figura;
        private $tiradas;

        public function __construct() {
            $this->tiradas = 0;
        }

        public function tira() {
            $resultado = rand(1, 6);

            switch($resultado) {
                case 1:
                    $this->figura = "AS";
                break;

                case 2:
                    $this->figura = "AS";
            }
        }

        public function getKmTotalesRecorridos() {
            return $this->getVehiculosCreados() * $this->kmRecorridos;
        }

        public function getKmRecorridos() {
            return $this->kmRecorridos;
        }

        public function recorre($km) {
            $this->kmRecorridos += $km;
        }
    }
?>