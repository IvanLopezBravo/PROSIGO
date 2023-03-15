<?php
	$hostname = 'www.prosigo.com.mx';
	$database = 'prosigoc_prueba';
	$username = 'prosigoc_prueba';
	$password = 'Pr0Psg2019';
	
	$conexion = new mysqli($hostname, $username, $password, $database);
	if($conexion->connect_errno){
		echo "Lo sentimos, el sitio web por el momento no se encuentra disponible. Intente de nuevo mas tarde.";
	} else {
		echo "Pagina funcionando correctamente";
	}
?>