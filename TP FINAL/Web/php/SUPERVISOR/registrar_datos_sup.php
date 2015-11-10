<html>
	<head>
		<?PHP		
			include ('../rutas.php');
			
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$alarma = mysql_query (" select ")
			
			
			
			
			
			
			
			
			/*function control ($x,$b){
			
				$control= mysql_query(" SELECT id_transporte trans
										FROM transporte
										where km_recorridos > '".$x."'") or die ("no query");
										
				$fila = mysql_fetch_assoc($control);
								
					echo "El vehiculo '".$fila ['trans']."' ha superado los '".$x."' kilometros, necesita un cambio de '".$b."'<br>";
									
				
	
                             
			}
			*/
		
		
		?>
	

		   

		<LINK REL="Stylesheet" HREF="../../Css/login.css" TYPE="text/css">
	</head>
	
	<body>
		<div id='divHeader_supervisor'>
			<h1> RECURSOS A GESTIONAR</h1>
		</div>

			<nav id='divNav_supervisor'>
		
				<ul>
       			    <li> <a href="./<?php echo $viajes_datos ?>">VIAJES</a></li>
            		<li><a href="./<?php echo $reparacion_datos?>">REPARACIONES</a></li>
					<li> <a href="./<?php echo $supervisor_home?>">ATRAS</a></li>
				</ul>
			</nav>

		<div id="divContenedor">


		</div>


       
		
		
	</body>
</html>