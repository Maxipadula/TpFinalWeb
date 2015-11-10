<html>
<?php include ("transportes_datos.php"); ?>
	<?php
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
		include ("../../../rutas.php");
		
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
		 
		 $consulta_transporte = mysql_query ("SELECT MA.descripcion marca,MO.descripcion modelo, T.patente patente
											  FROM transporte T join
												   vehiculo V  on T.id_vehiculo = V.id_vehiculo join
												   modelo MO on V.id_modelo = MO.id_modelo join
												   marca MA on MA.id_marca = MA.id_marca");
		
		$transporte ;
	
	?>

	<form class='contacto' method="post" action="<?php echo  $validar_modificacion_transportes ?>">
	<div id="contacto">
				</br>
				<div><label>SELECCIONAR TRANSPORTE A MODIFICAR:
					</br>
						MARCA
						</br>
					 <select name="transporte_modificar_marca"> 
					
						<option value="nada" selected="selected"></option>
						<?php
				
							while ($transporte=mysql_fetch_array($consulta_transporte))
						{
					
						?>				
						<option value=" <?php echo $transporte['marca'] ?> " >
						<?php echo $transporte['marca']; ?>
							</option>
						<?php
						}
						?>
                     </select>

					</label>
				</div>

				<div><label>MODELO
					</br>
					<select name="transporte_modificar_modelo"> 
					
						<option value="nada" selected="selected"></option>
						<?php
				
							while ($transporte=mysql_fetch_array($consulta_transporte) )
						{
					
						?>				
						<option value=" <?php echo $transporte['modelo'] ?> " >
						<?php echo $transporte['modelo']; ?>
							</option>
						<?php
						}
						?>
					</select>
					</label>
				</div>
				</br>
				<input type="submit" value="Seguir">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver'></form>
		</form>		
		</div>
	
</html>