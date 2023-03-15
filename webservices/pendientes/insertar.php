<?php
	include 'conexion.php';
	
	$tipo=$_POST['CA_TIPO'];
	$fecha=$_POST['CA_FECHA'];
	$importe=$_POST['CA_IMPORTE'];
	
	$consulta="INSERT INTO Cambio (CA_TIPO, CA_FECHA, CA_IMPORTE) VALUES ('".$importe."','".$fecha."','".$tipo."')";
	mysqli_query($conexion, $consulta) or die (mysqli_errno());
	mysqli_close($conexion);
?>