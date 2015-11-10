<html>
	<head>
	</head>
	
	<body>
		
		<?PHP
	        session_start();
			
			include ("../rutas.php");
			
			$permiso = "chofer home";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../permiso.php");
	
							
	        if ( isset ($_SESSION["nombre"])){
		
	          $nombre = $_SESSION["nombre"];
	   
	          echo "HOLA CHOFER ".$nombre."";
	        }
	        else{
		     session_destroy();
    
              header("location:".$login."");
	        }
			
		
        ?> 
		
		
	
	<?php include ("menu_chofer.php");?>
				
				
		
	</body>
</html>