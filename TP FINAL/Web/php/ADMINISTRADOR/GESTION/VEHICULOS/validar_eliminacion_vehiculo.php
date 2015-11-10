<html>
	<?php include("vehiculos_datos.php"); ?>
	<?PHP
	session_start() ;
	
	$id_vehiculo_elim =$_POST ["id_vehiculo_eliminar"];
	
	
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT id_vehiculo
									FROM vehiculo 
									WHERE id_vehiculo ='".$id_vehiculo_elim."'") or die ("no q");
	
	//$resultado = mysql_query($consulta);
	$filasafect = mysql_num_rows($consulta); /*CANTIDAD DE FILAS AFECTADAS*/
	
	$fila1 = mysql_fetch_assoc($consulta); /*DEVUELVE UN ARRAY DONDE CADA POSICION SE CORRESPONDE CON LOS ATRIBUTOS DE LA BD*/
	
	$vehiculo_eliminar = $fila1["id_vehiculo"];
	
	mysql_query("DELETE FROM vehiculo WHERE id_vehiculo = '$id_vehiculo_elim'")
    or die(mysql_error()); 
	header("Location: ".$vehiculos_datos."");
	?>
	
</html>