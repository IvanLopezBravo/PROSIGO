<?php
$path = '../../documentos/facturas/' . $_SESSION['SESION_Usuario'] . '/';
//asignamos a $directorio el objeto dir creado con la ruta

if (file_exists($path)) {
    $directorio = dir($path);

    $list = array();

    while ($archivo = $directorio->read()) {
        if ($archivo != "." || $archivo != "!..") {
            if (strtolower(substr($archivo, 0, 6) != "RECIBO") && (strtolower(substr($archivo, -3) == "pdf") || strtolower(substr($archivo, -3) == "PDF"))) {
                $list[] = $archivo;
            }
        }
    }
    
    natcasesort($list);//Ordena la lista
    
    foreach ($list as $fileName) {
        $ruta = $path . '' . $fileName;
        ?>
        <li><a href=<?php echo $ruta ?>><?php echo $fileName ?></a></li>
        <?php
    }

//y ahora lo vamos leyendo hasta el final
    /*    while ($archivo = $directorio->read()) {
      if ($archivo != "." || $archivo != "!..") {
      if (strtolower(substr($archivo, 0,6) != "RECIBO") && (strtolower(substr($archivo, -3) == "pdf") || strtolower(substr($archivo, -3) == "PDF")) ) {
      $ruta = $path . '' . $archivo;
      ?>
      <li><a href=<?php echo $ruta ?>><?php echo $archivo ?></a></li>
      <?php
      }
      }
      } */
}
?>
