<html>
	<body>
	
	<?php 	
	     session_start();
	
	     include ('../rutas.php');
		 
		 $permiso = "gestion de viajes";
		 
		 $conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
	  
	     include("../permiso.php");
	
	
	?>
	


			<h2> MODIFICAR REGISTROS DE VIAJES </h2>
			
		  
           <a href="./<?php echo $agregar_viaje ?>">ASIGNAR UN VIAJE</a>
		   <br>
		   <a href="./<?php echo $modificar_viaje ?>">MODIFICAR UN VIAJE</a>
		   <br>
		   <a href="./<?php echo $eliminar_viaje ?>">ELIMINAR REGISTRO DE VIAJE</a>
		   <br>
		   
	</body>



</html>