<html>
	SELECCIONAR EL MECANICO QUE QUIERAS ELIMINAR
	
	<?php
		
			include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT id_viaje, origen, destino, carga
									FROM viaje ") or die ("no q");
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>viaje</td><td>origen</td><td>destino</td><td>carga</td></tr> \n";
			do{
				echo "<tr><td>".$row["id_viaje"]."</td><td>".$row["origen"]."</td><td>".$row["destino"]."</td><td>".$row["carga"]."</td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?>
	
	<form class='contacto' method="post" action="<?php echo $validar_eliminacion_viaje ?>">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR ID:
					</br>
					<input type="text" name="id_eliminar_viaje">
					</label>
				</div>
				<br>
		
				<input type="submit" value="Eliminar">
				
		</div>
</html>