<?php

class BD {

    function iniciar_conexion() {
        $servidor = "localhost";
        $usuario = "prosigoc_web";
        $contraseña = "PSGsql99.";
        $bd = "prosigoc_web";
        $conexion = @mysql_connect($servidor, $usuario, $contraseña);

        if (!$conexion) {
            die('No pudo conectarse' . mysql_error());
        } else {
            // echo 'Conectado satisfactoriamente';
        }
        mysql_select_db($bd, $conexion) or die(mysql_error($conexion));
        return $conexion;
    }
    
    function cerrar_conexion($conexion){
        mysql_close($conexion);
    }
}
?>