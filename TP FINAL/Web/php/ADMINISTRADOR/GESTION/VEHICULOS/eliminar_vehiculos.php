<html>
<body>
	<?php include("vehiculos_datos.php"); ?>
	SELECCIONAR EL MODELO DE VEHICULO QUE QUIERAS ELIMINAR
	<br>
	<?php
		
			include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT U.id_vehiculo ID, IM.descripcion descri, MA.descripcion descrip, U.capacidad_carga  cap
									FROM vehiculo U inner join
									modelo IM on U.id_modelo = IM.id_modelo inner join 
									marca MA on U.id_marca = MA.id_marca") or die ("no q");
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>Modelo</td><td>Marca</td><td>Capacidad de Carga</td></tr> \n";
			do{
				echo "<tr><td>".$row["descri"]."</td><td>".$row["descrip"]."</td><td>".$row["cap"]."</td><td><a href='".$validar_eliminacion_vehculos."?ID=".$row["ID"]."' class = 'tabla'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?>
</body>
</html>