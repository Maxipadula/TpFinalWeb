
<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php 
			session_start();
		  
		   include ("../../rutas.php"); 
		    
			$permiso = "consulta de graficos";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../../permiso.php");
			
			?>
			
<div id='divHeader'>
			<h1> GRAFICOS</h1>
		</div>
	<nav id='divNav' >
		
       <ul>
           		

		  
           <li><a href="">VIAJES HECHOS POR MES</a></li>
		
		   <li><a href="">DINERO TOTAL GASTADO EN COMBUSTIBLE</a></li>

		   <li><a href="">KM TOTALES RECORRIDOS </a></li>

		   <li> <a href="">SALIR</a></li>
	

       </ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>