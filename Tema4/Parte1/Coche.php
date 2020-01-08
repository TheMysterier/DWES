<?php
    include_once "Vehiculo.php";

    class Coche extends Vehiculo {
        private $vehiculo = 1;

        public function __construct() {
            parent:: __construct($vehiculo);
            $this->marca = $m;
        }

        public function quemaRueda() {
            return "Quemando rueda";
        }

        public function hazCaballito() {
            return "Vaya cani";
        }
    }

    $coche = new Coche();
    $coche->recorre(20);
    echo "<p>" . $coche->getVehiculosCreados() . "</p>";
    echo "<p>" . $coche->hazCaballito() . "</p>";
?>