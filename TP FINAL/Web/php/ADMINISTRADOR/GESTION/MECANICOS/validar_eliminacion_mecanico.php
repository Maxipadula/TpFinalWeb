<html>
	<?PHP
	session_start() ;
	
	$id_mecanico_elim =$_POST ["id_eliminar_mecanico"];
	
	
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");;
		
		 $consulta  = mysql_query ("SELECT id_mecanico
									FROM mecanico
									WHERE id_mecanico ='".$id_mecanico_elim."'") or die ("no q");
	
	//$resultado = mysql_query($consulta);
	$filasafect = mysql_num_rows($consulta); /*CANTIDAD DE FILAS AFECTADAS*/
	
	$fila1 = mysql_fetch_assoc($consulta); /*DEVUELVE UN ARRAY DONDE CADA POSICION SE CORRESPONDE CON LOS ATRIBUTOS DE LA BD*/
	
	$mecanico_eliminar = $fila1["id_mecanico"];
	
	mysql_query("DELETE FROM mecanico WHERE id_mecanico = '$id_mecanico_elim'")
    or die(mysql_error()); 
	
	?>
	
</html>