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
	

	</head>
	
	<body>
	
			<h2> RECURSOS A GESTIONAR </h2>
			
		  
           <a href="./<?php echo $viajes_datos ?>">VIAJES</a>

           <a href="./<?php echo $reparacion_datos?>">REPARACIONES</a>

		  <br>
		  <br>
		   <br>
           <a href="./<?php echo $supervisor_home?>">ATRAS</a>
		   
		
       
		
		
	</body>
</html>