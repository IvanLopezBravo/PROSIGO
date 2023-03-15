<?php

include("Contrasenia.php");
$p = new Contrasenia();

$rfc = 'OGV960213GK6';
//$rfc = $_GET['rfc'];
$contrasenia = $p->generar_contrasenia(8);

$p = new Contrasenia();
$p->actualizar_contrasenia($rfc, $contrasenia);

echo "RFC:" .$rfc." Contraseña: ".$contrasenia;

?>