<html>
	<head>
		<?PHP
			$motor = 150;
			$llanta = 60000;
			$rueda = 30000;
			$tapa_cilindro = 190000;
			$amortiguadores = 10000;
			$volante = 250000;
			$paragolpes = 100500;
			$guardabarros = 220000;
			
			$motor_n = "Motor";
			$llanta_n = "Llantas";
			$rueda_n = "Ruedas";
			$tapa_cilindro_n = "Tapa de Cilindro";
			$amortiguadores_n = "Amortiguadores";
			$volante_n = "Volante";
			$paragolpes_n = "Paragolpes";
			$guardabarros_n = "Guardabarros";
			
			include ('../rutas.php');
			
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			control ($motor,$motor_n);
			control($llanta,$llanta_n);
			control ($rueda,$rueda_n);
			control($tapa_cilindro,$tapa_cilindro_n);
			control ($amortiguadores,$amortiguadores_n);
			control($volante,$volante_n);
			control ($paragolpes,$paragolpes_n);
			control($guardabarros,$guardabarros_n);
			
			function control ($x,$b){
			
				$control= mysql_query(" SELECT id_transporte trans
										FROM transporte
										where km_recorridos > '".$x."'") or die ("no query");
										
				$fila = mysql_fetch_assoc($control);
								
					echo "El vehiculo '".$fila ['trans']."' ha superado los '".$x."' kilometros, necesita un cambio de '".$b."'<br>";
									
				
	
                             
			}
		
		
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