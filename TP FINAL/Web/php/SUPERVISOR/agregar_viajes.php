 <html>

	<?PHP
				include ('../rutas.php');
	
				$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_viaje ) ID
                                        FROM viaje ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_viaje= $fila1["ID"];
			
			$id_viaje +=1;
	?>
 	FORMULARIO PARA TABLA VIAJES:
	
 	<form class='contacto' method="post" action="<?php echo $validar_datos_viaje ?>">
 		<div id="contacto">
 				</br>
 				<div><label>ID
					</br>
					<input type="text" name="id_viajes"  value="<?php echo $id_viaje?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
			<?php	
 				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
				$consulta  = mysql_query ("SELECT id_usuario, nombre
										  FROM usuario
										  where codigo_rol = 1") or die ("no q");
			
				if ($row = mysql_fetch_array($consulta)){
				echo "<table border = '1'> \n";
				echo "<tr><td>id_usuario</td><td>Nombre y Apellido</td></tr> \n";
				do{
					echo "<tr><td>".$row["id_usuario"]."</td><td>".$row["nombre"]."</td></tr> \n";     
				} while ($row = mysql_fetch_array ($consulta));
				echo "</table> \n";
				} else {
				echo "no se encontraron ningun registro";
				} 
			?>
				<br>
 				<div><label>ID USUARIO
 					</br>
 					<input type="text" name="id_usuario">
 				</label>
 				</div>
 				</br>
				
				<?php	
 				$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
				mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
				$consulta  = mysql_query ("SELECT t.id_transporte id, t.patente patente,M.descripcion marca,MO.descripcion modelo
											FROM transporte T join 
											     vehiculo V on V.id_vehiculo = T.id_vehiculo join
												 marca M on M.id_marca = V.id_marca join
												 modelo MO on MO.id_modelo = V.id_modelo") or die ("no q");
			
				if ($row = mysql_fetch_array($consulta)){
				echo "<table border = '1'> \n";
				echo "<tr><td>id_transporte</td><td>patente</td><td>vehiculo</td></tr> \n";
				do{
					echo "<tr><td>".$row["id"]."</td><td>".$row["patente"]."</td><td>".$row["marca"]."  ".$row["modelo"]."</td></tr> \n"; 
					
				} while ($row = mysql_fetch_array ($consulta));
				echo "</table> \n";
				} else {
				echo "no se encontraron ningun registro";
				} 
			?>
				
				<br>
 				<div><label>ID TRANSPORTE
 					</br>
 					<input type="text" name="id_transpo">
 				</label>
 				</div>
 				</br>
				
 				<div><label>ORIGEN
 					</br>
 					<input type="text" name="origen">
 				</label>
 				</div>
 				</br>
				
				<div><label>DESTINO
 				</br>
 				<input type="text" name="destino">
 				</label>
 				</div>
 				</br>
				
				<div><label>CLIENTE
 				</br>
 				<input type="text" name="cliente">
 				</label>
 				</div>
 				</br>
				
				 <div><label>FECHA DE INICIO
 				</br>
 				<input type="text" name="fecha_inicio">
 				</label>
 				</div>
 				</br>
				
				 <div><label>CARGA
 				</br>
 				<input type="text" name="carga">
 				</label>
 				</div>
 				</br>
				
 				<input type="submit" value="Agregar">
				<br>
 		</div>
 	</form>
	
	<input type="submit" value="Atras" onclick = "location='viajes_datos.php'"/>
 
 </html>