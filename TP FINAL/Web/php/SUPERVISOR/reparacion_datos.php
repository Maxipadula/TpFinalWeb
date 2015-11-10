<html>
	<body>

			<h2> MODIFICAR COSAS DE LA REPARACION </h2>
			
			<?php 
				session_start();
			
			include ("../rutas.php");
			
			$permiso = "gestion de reparaciones";
		 
					 $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
					 mysql_select_db ("tpFinal",$conexion) or die ("no db");
				  
					 include("../permiso.php");
		 
		    ?>
			
           <a href="./<?php echo $agregar_reparacion?>">AGREGAR</a>
		   <br>
		   <a href="./<?php echo $modificar_reparacion?>">MODIFICAR</a>
		   <br>
		   <a href="./<?php echo $eliminar_reparacion?>">ELIMINAR</a>
		   <br>
		   
	</body>



</html>