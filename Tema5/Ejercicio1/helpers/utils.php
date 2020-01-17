<?php
    class Utils {
        public static function mostrarError($name):string {
            $error="";

            if(isset($_SESSION[$name])) {
                switch($_SESSION[$name]) {
                    case 'complete':
                        $error='<strong class="alert_green">Registro completado correctamente</strong>';
                    break;
                    case 'failed':
                        $error='<strong class="alert_green">Registro fallido, introduce bien los datos</strong>';
                    break;
                    case 'inserted':
                        $error='<strong class="alert_green">Nota creada correctamente</strong>';
                    break;
                    case 'not inserted':
                        $error='<strong class="alert_green">Fallo al crear la nota, introduce bien los datos</strong>';
                    break;
                }

                $_SESSION[$name] = null;
                unset($_SESSION[$name]);
            }

            return $error;
        }
    }
?>