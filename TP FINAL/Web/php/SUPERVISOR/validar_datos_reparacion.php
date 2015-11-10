<html> 
 	<?PHP 
 	session_start() ; 
 	 
 	$codigo_reparac =$_POST ["cod_reparacion"]; 
 	$id_mecani =$_POST ["id_mecanico"]; 
 	$id_transp =$_POST ["id_transporte"]; 
 	$id_ord =$_POST ["id_orden"]; 
 	$cost =$_POST ["costo"]; 
 	$fech =$_POST ["fecha"]; 
 	 	 
 		include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db"); 
 	 
	 $insert_reparacion = mysql_query("insert into reparacion (codigo_reparacion, id_mecanico, id_transporte, id_orden, costo, fecha) 
 									values ('".$codigo_reparac."','".$id_mecani."','".$id_transp."','".$id_ord."', '".$cost."', '".$fech."')  
 										    ;")or die (mysql_error()); 
	 
	 
	 
 	/*$consulta2= mysql_query(" SELECT id_tipo_doc tipo 
                               FROM tipo_doc 
                               WHERE descripcion = '".$tipo_d."' ") or die ("no q3"); 
 	 
 	$fila2 = mysql_fetch_assoc($consulta2); 
 	$id_tipo_d = $fila2["tipo"]; 
 	 
 	 
 	//echo $id_tipo_d; PARA VER QUE TRAEN
 							 
 							 
 	$consulta1= mysql_query(" SELECT codigo_rol ID 
                               FROM rol  
                               WHERE rol.descripcion = '".$rol."' ") or die ("no q2"); 
 	 
 	$fila1 = mysql_fetch_assoc($consulta1); 
 							 
 	$cod_rol = $fila1["ID"]; 
 		 					   
      
 	//echo $cod_rol; PARA VER QUE TRAEN	 
       
  
 
 	*/									 
	echo "<p>Los datos han sido guardados con exito.</p>    
  
 		<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>"; 
 							 
  
 	?> 
 	 
 </html> 