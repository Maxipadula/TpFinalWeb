<html>
	SELECCIONAR EL MECANICO QUE QUIERAS ELIMINAR
 <?php include ("mecanicos_datos.php");?>
	<?php
		
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT *
									FROM mecanico ") or die ("no q");
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>id_mecanico</td><td>Nombre y Apellido</td></tr> \n";
			do{
				echo "<tr><td>".$row["id_mecanico"]."</td><td>".$row["nombre"]."</td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?>
	
	<form class='contacto' method="post" action="<?php echo $validar_eliminacion_mecanico?>">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR ID:
					</br>
					<input type="text" name="id_eliminar_mecanico">
					</label>
				</div>
				<br>
		
				<input type="submit" value="Eliminar">
				
		</div>
</html>