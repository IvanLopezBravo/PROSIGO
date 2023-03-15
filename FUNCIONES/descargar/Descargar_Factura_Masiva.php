<?php

include("../sesiones/Sesion.php");

$sesion = new Sesion();
$sesion->iniciar_sesion();

// Creamos un instancia de la clase ZipArchive
$zip = new ZipArchive();

$path = '../../documentos/facturas/' . $_SESSION['SESION_Usuario'] . '/';
//asignamos a $directorio el objeto dir creado con la ruta

if (file_exists($path)) {
    
   $directorio = dir($path);

// Creamos y abrimos un archivo zip temporal
    $zip->open("facturas_" . $_SESSION['SESION_Usuario'] . ".zip", ZipArchive::CREATE); // Añadimos un directorio
//$zip->addEmptyDir("facturas");
    $cantidad_archivos = 0;
//y ahora lo vamos leyendo hasta el final
    while ($archivo = $directorio->read()) {
        if ($archivo != "." || $archivo != "!..") {
            if (strtolower(substr($archivo, 0,6) != "RECIBO") && (strtolower(substr($archivo, -3) == "pdf" || strtolower(substr($archivo, -3) == "PDF") ||  strtolower(substr($archivo, -3) == "xml")))) {
                $ruta = $path . '' . $archivo;
                //Añadimos un archivo dentro del directorio que hemos creado
                $zip->addFile($ruta, $archivo);
                $cantidad_archivos++;
            }
        }
    }

// Una vez añadido los archivos deseados cerramos el zip.
    $zip->close();

    if ($cantidad_archivos > 0) {
        // Creamos las cabezeras que forzaran la descarga del archivo como archivo zip.
        header("Content-type: application/octet-stream");
        header("Content-disposition: attachment; filename=" . "facturas_" . $_SESSION['SESION_Usuario'] . ".zip");
// leemos el archivo creado
        readfile("facturas_" . $_SESSION['SESION_Usuario'] . ".zip");
        //Por último eliminamos el archivo temporal creado
        unlink("facturas_" . $_SESSION['SESION_Usuario'] . ".zip"); //Destruyearchivo temporal 
    } else {
        echo "<script language='JavaScript'>";
        echo "alert(\"No tiene facturas que descargar\");";
        echo "</script>";
        echo"<script language=\"javascript\">window.location=\"../../paginas/clientes/Clientes.php\"</script>;";
    }

//header('Content-Type: application/pdf');
//header('Content-Disposition: attachment; filename=' . $archivo);
//header('Content-Transfer-Encoding: binary');
//header('Cache-Control: max-age=0');
//header('Content-Length: ' . filesize($ruta));
//readfile($ruta);
} else {
        echo "<script language='JavaScript'>";
        echo "alert(\"No tiene facturas que descargar\");";
        echo "</script>";
        echo"<script language=\"javascript\">window.location=\"../../paginas/clientes/Clientes.php\"</script>;";
    }
?>