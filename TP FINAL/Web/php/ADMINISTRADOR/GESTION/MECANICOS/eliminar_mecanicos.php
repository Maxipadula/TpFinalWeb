<html>
	
 <?php include ("mecanicos_datos.php");?>
	<?php
		
		include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		 $consulta  = mysql_query ("SELECT *
									FROM mecanico ") or die ("no q");
		
       echo "SELECCIONAR EL MECANICO QUE QUIERAS ELIMINAR";
			
		if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>Nombre y Apellido</td></tr> \n";
			do{
				echo "<tr><td>".$row["nombre"]."</td><td><a href='".$validar_eliminacion_mecanico."?ID=".$row["id_mecanico"]."' class = 'tabla'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
		} else {
			echo "no se encontraron ningun registro";
		} 

?>
	

</html>