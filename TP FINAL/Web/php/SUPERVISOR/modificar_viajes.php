 <html>

	<?PHP
	
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
		
		
	?>
 	SELECCIONE VIAJE A MODIFICAR
	
 
 </html>