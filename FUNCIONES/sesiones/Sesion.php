<?php
class Sesion {
    function iniciar_sesion() {
        @session_start();
    }
    function cerrar_sesion() {
        @session_start();
        if (isset($_SESSION)) {
            session_unset(); //si hay una sesion la eliminamos
            session_destroy();
        }
    }
    function crear_variable_sesion($variable){
        $_SESSION['SESION_Usuario'] = $variable;
    }
}
?>