 <html>
<head>
</head>	
<body>
	<?php include("vehiculos_datos.php"); ?>
	<?PHP
			session_start();
			
			
	
	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_vehiculo ) ID
                                        FROM vehiculo ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_vehiculo= $fila1["ID"];
			
			$id_vehiculo +=1;
	?>
	<div id="divContenedor">
	</br>
 	<p>FORMULARIO PARA TABLA VEHICULO:</p>
 	<form class='contacto' method="post" action="<?php echo  $validar_datos_vehiculos  ?>">
 		<div id="contacto">
 				
 				<div><label>ID</label>
 					</br>
					<input type="text" name="id_ve"  value="<?php echo $id_vehiculo?>"readonly = "readonly">
 				</div>
 				</br>
				
 				<div><label>MODELO</label>
 				</br>
				<input type="text" name="modelo">
 				</div>
				<br>
				
				<div><label>MARCA</label>
 				</br>
				<input type="text" name="marca">
 				</div>
				<br>
				
				<div><label>CAPACIDAD DE CARGA</label>
					</br>
 					<input type="text" name="capacidad_carga">
 				</div>
				<br>
				
 				<input type="submit" value="Agregar" id="boton" class="boton">
 				<input type="submit" value="Atras" onclick = "location='<?php echo $vehiculos_datos ?>'" class="boton"/>
				<br>
 		</div>
 	</form>
 	
<<<<<<< HEAD
	
 	</div>
 </body>
=======

 
>>>>>>> origin/master
 </html>