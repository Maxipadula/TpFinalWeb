 <html>
 <head>
	<meta charset="UTF-8">
</head>
<body>
<?php include ("transportes_datos.php"); ?>
	<?php		
			
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

			include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta_id= mysql_query(" SELECT MAX( id_transporte ) ID
                                        FROM transporte ") or die ("no query");
                             
			
			$fila1 = mysql_fetch_assoc($consulta_id);
			
			$id_transporte= $fila1["ID"];
			
			$id_transporte +=1111;
			
			
			
	?>
 	 AGREGAR TRANSPORTES:
 	 <form class='contacto' method="post" name="transporte" action="">
 		<div id="contacto">
 				</br>
 				<div><label>ID
					</br>
					<input type="text" name="id_tr"  value="<?php echo $id_transporte?>"readonly = "readonly">
 				</label>
 				</div>	
 				</br>
				
 				<div><label>ESTADO DEL VEHICULO
 					</br>
					 <select name="estado_transporte"> 
					 <option value="nada" selected="selected"></option>
					 <option value="mm">Muy Malo</option>
                     <option value="m">Malo</option>
                     <option value="r">Regular</option>
					 <option value="b">Bueno</option>
					 <option value="mb">Muy Bueno</option>
                     </select>
 				</label>
 				</div>
 				</br>
				
				<div><label>MARCA
				 <select name="marca_transporte"> 
				 <option value="nada" selected="selected"></option>
				<?php
				
				$consulta_marca = mysql_query ("SELECT *
												FROM marca");
				
				
												
				 ?>  
				 <?php
				while ( $row = mysql_fetch_array($consulta_marca) )
				{
					
				 ?>
				  <option value=" <?php echo $row['descripcion'] ?> " >
				  <?php echo $row['descripcion']; ?>
				  </option>
			    <?php
				}
				?>
				</label>
				</select>
 				</div>
 				</br>
				
						
				<div><label>MODELO
				 <select name="modelo_transporte"> 
				 <option value="nada" selected="selected"></option>
				<?php								
				$consulta_modelo = mysql_query ("SELECT descripcion,id_modelo ID
												FROM modelo");
				
				?>
				<?php
				while ( $row2 = mysql_fetch_array($consulta_modelo) )
				{
					
				?>				
				  <option value=" <?php echo $row2['descripcion'] ?> " >
				  <?php echo $row2['descripcion']; ?>
				  </option>
			    <?php
				}
				?>
				</label>
				</select>
 				</div>
 				</br>
				
				
				<div><label>NUMERO DE CHASIS
 					</br>
 					<input type="text" name="num_chasis">
 				</label>
 				</div>
 				</br>
				
				<div><label>NUMERO DE MOTOR
 					</br>
 					<input type="text" name="num_motor">
 				</label>
 				</div>
 				</br>
				
				<div><label>AÑO DE FABRICACION
 					</br>
 					<input type="text" name="fabricacion">
 				</label>
 				</div>
 				</br>
				
				<div><label>PATENTE
 					</br>
 					<input type="text" name="patente">
 				</label>
 				</div>
 				</br>
				
				<div><label>KM RECORRIDOS
 					</br>
 					<input type="text" name="patente">
 				</label>
 				</div>
 				</br>
							
				<input type="submit" value="Seguir">
				<input type="reset" value="Borrar Todo">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
 		</div>
 	</form>
</body>
</html>