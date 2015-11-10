 <html>

	<?PHP
	include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( codigo_reparacion ) IDR
                                        FROM reparacion ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$codigo_reparacion= $fila1["IDR"];
			
			$codigo_reparacion +=1;
	?>
 	FORMULARIO PARA TABLA REPARACION:
 	<form class='contacto' method="post" action="<?php echo $validar_datos_reparacion ?>">
 		<div id="contacto">
 				</br>
 				<div><label>CODIGO
					</br>
					<input type="text" name="cod_reparacion"  value="<?php echo $codigo_reparacion?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
					
				<?php
					
					$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
					mysql_select_db ("tpFinal",$conexion) or die ("no db");
					
					 $consulta  = mysql_query ("SELECT *
												FROM mecanico ") or die ("no q");
						
					if ($row = mysql_fetch_array($consulta)){
						echo "<table border = '1'> \n";
						echo "<tr><td>id_mecanico</td><td>Nombre y Apellido</td></tr> \n";
						do{
							echo "<tr><td>".$row["id_mecanico"]."</td><td>".$row["nombre"]."</td></tr> \n";     
						} while ($row = mysql_fetch_array ($consulta));
						echo "</table> \n";
					} else {
						echo "no se encontraron ningun registro";
					} 

				?>
				<br>
 				<div><label>ID MECANICO
 					</br>
 					<input type="text" name="id_mecanico">
 				</label>
 				</div>
 				</br>
				
				<?php
					
					$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
					mysql_select_db ("tpFinal",$conexion) or die ("no db");
					
					 $consulta  = mysql_query ("SELECT T.id_transporte trans, E.descripcion estado, T.patente patente 
												FROM transporte T inner join 
												estado E on T.id_Estado = E.id_Estado	") or die ("no q");
						
					if ($row = mysql_fetch_array($consulta)){
						echo "<table border = '1'> \n";
						echo "<tr><td>id_transporte</td><td>estado</td><td>patente</td></tr> \n";
						do{
							echo "<tr><td>".$row["trans"]."</td><td>".$row["estado"]."</td><td>".$row["patente"]."</td></tr> \n";     
						} while ($row = mysql_fetch_array ($consulta));
						echo "</table> \n";
					} else {
						echo "no se encontraron ningun registro";
					} 

				?>				
				<br>
 				<div><label>ID TRANSPORTE
 					</br>
 					<input type="text" name="id_transporte">
 				</label>
 				</div>
 				</br>
				<?php
					
					$conexion = mysql_connect("localhost:3306", "root","") or die("no conecta");
					mysql_select_db ("tpFinal",$conexion) or die ("no db");
					
					 $consulta  = mysql_query ("SELECT O.id_orden id_orden, RE.descripcion repuesto, RE.costo costo, O.cantidad cantidad 
												FROM orden O inner join 
												repuesto RE on O.id_repuesto = RE.id_repuesto") or die ("no q");
						
					if ($row = mysql_fetch_array($consulta)){
						echo "<table border = '1'> \n";
						echo "<tr><td>id_orden</td><td>repuesto</td><td>costo</td><td>cantidad</td></tr> \n";
						do{
							echo "<tr><td>".$row["id_orden"]."</td><td>".$row["repuesto"]."</td><td>".$row["costo"]."</td><td>".$row["cantidad"]."</td></tr> \n";     
						} while ($row = mysql_fetch_array ($consulta));
						echo "</table> \n";
					} else {
						echo "no se encontraron ningun registro";
					} 

				?>		
				<br>
 				<div><label>ID ORDEN
 					</br>
 					<input type="text" name="id_orden">
 				</label>
 				</div>
				<br>
				
 				<div><label>COSTO
 					</br>
 					<input type="text" name="costo">
 				</label>
 				</div>
 				</br>	
				
 				<div><label>FECHA
 					</br>
 					<input type="text" name="fecha">
 				</label>
 				</div>
 				</br>					
				
							
				<input type="submit" value="Agregar">
				<br>
 		</div>
 	</form>
	
	<input type="submit" value="Atras" onclick = "location='<?php echo $reparacion_datos?>'"/>
 
 </html>