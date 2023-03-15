<?php

class Contrasenia {

    function validar_contrasenia($hash, $salt, $contrasenia) {

        if ($hash === hash('sha512', $salt . $contrasenia)) {
            return true;
        } else {
            return false;
        }
    }

    function actualizar_contrasenia($rfc, $contrasenia) {

        include("../bd/BD.php");

        $bd = new BD();
        $conexion = $bd->iniciar_conexion();

        $salt = md5(uniqid(rand(), true));
        $hash = hash('sha512', $salt . $contrasenia);
        unset($contrasenia);

        $sql = mysql_query("update `Clientes` set CL_HASH='$hash' , CL_SALT ='$salt' where CL_RFC='$rfc';", $conexion);

        $conexion = $bd->cerrar_conexion($conexion);

        if (!$sql) {
            return true;
        } else {
            return false;
        }
    }

    function generar_contrasenia($longitud) {

        // TRUE O FALSE EN LA OPCIÓN QUE QUIERAS AÑADIR

        $opc_letras = TRUE; //  FALSE para quitar las letras
        $opc_numeros = TRUE; // FALSE para quitar los números
        $opc_letrasMayus = TRUE; // FALSE para quitar las letras mayúsculas
        $opc_especiales = FALSE; // FALSE para quitar los caracteres especiales
        $password = "";

        $letras = "abcdefghijklmnopqrstuvwxyz";
        $numeros = "1234567890";
        $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $especiales = "|@#~$%()=^*+[]{}-_";
        $listado = "";

        if ($opc_letras == TRUE) {
            $listado .= $letras;
        }
        if ($opc_numeros == TRUE) {
            $listado .= $numeros;
        }
        if ($opc_letrasMayus == TRUE) {
            $listado .= $letrasMayus;
        }
        if ($opc_especiales == TRUE) {
            $listado .= $especiales;
        }

        str_shuffle($listado);
        for ($i = 1; $i <= $longitud; $i++) {
            $password[$i] = $listado[rand(0, strlen($listado))];
            str_shuffle($listado);
        }
//        foreach ($password as $dato_password) {
//            echo $dato_password;
//        }
        return implode ($password);
    }

}

?>