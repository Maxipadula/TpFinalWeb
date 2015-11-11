<html>

	<?php
		include ("transportes_datos.php");
		
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
		
		include ("../../../rutas.php");
		
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	     mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	$id_transporte = $_GET["ID"];
	
	
	if (isset ($id_transporte)){
		$update_transporte = mysql_query("UPDATE usuario
									   SET nombre ='".$_POST["nombre"]."'
									   WHERE id_usuario = '".$id_usuario."'")or die (mysql_error());