<?php

include("../BD.php");
include("../../sesiones/Sesion.php");
include("../../contrasenia/Contrasenia.php");

$bd = new BD();
$c = new Contrasenia();
$conexion = $bd->iniciar_conexion();

$sesion = new Sesion();
$rfc = $_POST['rfc'];
$contrasenia = $_POST['contrasenia'];

$query = mysql_query("select * from Clientes where CL_RFC='$rfc';", $conexion);

$rows = mysql_num_rows($query);

if ($rows >= 1) {

    $sesion->cerrar_sesion();

    while ($fila = mysql_fetch_array($query)) {
        $rfc = $fila['CL_RFC'];
        $nombre = $fila['CL_NOM'];
        $hash = $fila['CL_HASH'];
        $salt = $fila['CL_SALT'];
    }

    if ($c->validar_contrasenia($hash, $salt, $contrasenia)) {
        $sesion->iniciar_sesion();
        $sesion->crear_variable_sesion($rfc);
        $conexion = $bd->cerrar_conexion($conexion);
        header("Location: ../../../paginas/clientes/Clientes.php");
    } else {
        $conexion = $bd->cerrar_conexion($conexion);
        echo "<script language='JavaScript'>";
        echo "alert(\"Contraseña incorrecta\");";
        echo "</script>";
        echo"<script language=\"javascript\">window.location=\"../../../index.php\"</script>;";
    }
} else {
    $conexion = $bd->cerrar_conexion($conexion);
    echo "<script language='JavaScript'>";
    echo "alert(\"No existe este usuario\");";
    echo "</script>";
    echo"<script language=\"javascript\">window.location=\"../../../index.php\"</script>;";
}

?>

