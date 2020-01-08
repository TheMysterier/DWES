<?php
    abstract class Vehiculo {
        private static $vehiculosCreados = 0;
        private $kmRecorridos;
        private static $kmTotales = 0;

        public function __construct($v) {
            Vehiculo::$vehiculosCreados += $v;
            $this->kmRecorridos = 0;
        }

        public function getVehiculosCreados() {
            return $this->vehiculosCreados;
        }

        public function getKmTotalesRecorridos() {
            return $this->getVehiculosCreados() * $this->kmRecorridos;
        }

        public function getKmRecorridos() {
            return $this->kmRecorridos;
        }

        public function recorre($km) {
            $this->kmRecorridos += $km;
            Vehiculo::$kmTotales += $km;
        }
    }
?>