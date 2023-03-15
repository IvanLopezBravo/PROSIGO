<?php

include("../sesiones/Sesion.php");

$sesion = new Sesion();
$sesion->iniciar_sesion();

// Creamos un instancia de la clase ZipArchive
$zip = new ZipArchive();

$path = '../../documentos/facturas/' . $_SESSION['SESION_Usuario'] . '/';
//asignamos a $directorio el objeto dir creado con la ruta
$directorio = dir($path);


//y ahora lo vamos leyendo hasta el final
while ($archivo = $directorio->read()) {
    if ($archivo != "." || $archivo != "!..") {
        if (strtolower(substr($archivo, -3) == "pdf")) {
            $ruta = $path . '' . $archivo;
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename=' . $archivo);
            header('Content-Transfer-Encoding: binary');
            header('Cache-Control: max-age=0');
            header('Content-Length: ' . filesize($ruta));
            readfile($ruta);
        }
    }
}


if ($cantidad_archivos > 0) {
    
} else {
    echo "<script language='JavaScript'>";
    echo "alert(\"No tiene facturas que descargar\");";
    echo "</script>";
    echo"<script language=\"javascript\">window.location=\"../../paginas/clientes/Clientes.php\"</script>;";
}
?>