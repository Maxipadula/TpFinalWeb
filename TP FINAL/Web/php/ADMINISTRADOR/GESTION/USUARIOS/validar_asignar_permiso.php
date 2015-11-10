<?php include ("permisos_datos.php"); ?>
<?php


	session_start();
	
	$permiso = $_POST["permiso"];
	$rol = $_POST["rol"];

	include ('../../../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");

	$consulta1 = mysql_query(" select codigo_rol codigo
								from rol
								where descripcion = '".$rol."'") or die (mysql_error());
	
	$fila1 = mysql_fetch_assoc($consulta1) or die ("cuac");
	
	$consulta2 = mysql_query(" select id_permiso id
								from permiso
								where descripcion = '".$permiso."'") or die (mysql_error());
								
	
	$fila2 = mysql_fetch_assoc($consulta2) or die ("cuac");
	
	$cod_rol = $fila1["codigo"];
	$id_permiso = $fila2["id"];
	
	$insertar_permiso = mysql_query ("insert into dar_permiso(id_permiso,codigo_rol)
											values('".$id_permiso."','".$cod_rol."');") or die (mysql_error());
?>

