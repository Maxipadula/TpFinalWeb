<html>
	<?php include("vehiculos_datos.php"); ?>
	SELECCIONAR EL VEHICULO QUE QUIERAS ELIMINAR
	<br>
	<?php
		
			include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT U.id_vehiculo id, IM.descripcion descri, MA.descripcion descrip, U.capacidad_carga  cap
									FROM vehiculo U inner join
									modelo IM on U.id_modelo = IM.id_modelo inner join 
									marca MA on U.id_marca = MA.id_marca") or die ("no q");
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>id_vehiculo</td><td>modelo</td><td>marca</td><td>capacidad_carga</td></tr> \n";
			do{
				echo "<tr><td>".$row["id"]."</td><td>".$row["descri"]."</td><td>".$row["descrip"]."</td><td>".$row["cap"]."</td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?>
	<form class='contacto' method="post" action="<?php echo  $validar_eliminacion_vehculos  ?>">
	
		<div id="contacto">
				</br>
				<div><label>INGRESAR ID DE VEHICULO:
					</br>
					<input type="text" name="id_vehiculo_eliminar">
					</label>
				</div>
				</br>
				
				<input type="submit" value="Eliminar">
				
		</div>
</html>