<html> 
	<?php include("vehiculos_datos.php"); ?>
 	<?PHP 
 	session_start() ; 
 	 
	$id_vehi =$_POST ["id_ve"]; 	 
 	$model =$_POST ["modelo"]; 
 	$marc =$_POST ["marca"]; 
 	$cap_carga =$_POST ["capacidad_carga"]; 
 	 
	 
 	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
 	 
 	$consulta2= mysql_query(" SELECT id_modelo MODELO
                               FROM modelo 
                               WHERE descripcion = '".ucfirst($model)."' ") or die ("no q3"); 
 	

	$filas_afectadas_modelo = mysql_num_rows($consulta2);
	
	 if($filas_afectadas_modelo ==1){
		
		$fila2 = mysql_fetch_assoc($consulta2); 
	
 	    $model_id = $fila2["MODELO"]; 
		
	}
 
 	 
 	 
 	//echo $id_mode; PARA VER QUE TRAEN
 							 
 	$consulta1= mysql_query(" SELECT id_marca marca
                               FROM marca
                               WHERE marca.descripcion = '".ucfirst($marc)."' ") or die ("no q2"); 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 	$id_mar = $fila1["marca"]; 
 	$filas_afectadas_marca = mysql_num_rows($consulta1);
	
	if ($filas_afectadas_marca == 0){
		
	    $consulta_id_marca= mysql_query(" SELECT MAX( id_marca ) ID
                                        FROM marca ") or die ("no query");
                             
			
		$fila2 = mysql_fetch_assoc($consulta_id_marca);
			
		$id_mar= $fila2["ID"];
			
		$id_mar+=1;
		
		$insert_marca = mysql_query("insert into marca (id_marca, descripcion)
													values	('".$id_mar."', '".ucfirst($marc)."');");
	}else if($filas_afectadas_marca ==1){
		
		$fila2 = mysql_fetch_assoc($consulta2); 
	
 	    $id_mar = $fila2["MODELO"]; 
		
	}	 					   
      
 	//echo $id_mar; PARA VER QUE TRAEN 
       
  
 	$insert_vehiculo = mysql_query("insert into vehiculo (id_vehiculo, id_modelo, id_marca , capacidad_carga) 
 									values ('".$id_vehi."','".$model_id."','".$id_mar."','".$cap_carga."')  
 										    ;")or die (mysql_error()); 
 											 
	header("Location: ".$vehiculos_datos."");
 							 
  
 	?> 
 	 
 </html> 