<html>
	<head>
		<?PHP		
			include ('../rutas.php');
			
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
			

			$alarma = mysql_query (" select R.descripcion des, A.kilometros km
									 from alarmas A inner join 
										  repuesto R on A.id_repuesto = R.id_repuesto 
										  ") or die ("no queryss");
  
			if($alarma!=NULL){
				if(mysql_num_rows($alarma)>0){
						while($row=mysql_fetch_array($alarma)){
							//echo "ID de la alarma: ".$row['id']." KILOMETROS de la alarma: ".$row['km'];
							echo "<br>";
							echo "Los siguientes transportes han superado los " .$row['km']. " kilometros y deben reparar " .$row['des']. ".";
							echo "<br>";
							$transporte = mysql_query ("select id_transporte id,km_recorridos kilometros
														from transporte") or die ("no query");
														
							if($transporte!=NULL){
									if(mysql_num_rows($transporte)>0){
											while($filaa=mysql_fetch_array($transporte)){
												
												
												if ($row['km'] < $filaa['kilometros']){
		
													echo "El transporte: " .$filaa['id']. "";
													echo "<br>";
											
												}
														
										}
									}
							}

						}
				}else{
				}
				mysql_free_result($alarma);
			}
			

		
			
			
  
			
			
			
			
			
			
			
			
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