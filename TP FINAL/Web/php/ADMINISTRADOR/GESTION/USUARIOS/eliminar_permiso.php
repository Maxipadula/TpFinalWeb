<html>
<head>
</head>
<body>
<?php include ("permisos_datos.php"); ?>
	<div id="divContenedor">
	</br>
	<p>SELECCIONAR PERMISO A ELIMINAR</p>
	
	<?php
		
		include ('../../../rutas.php');
	
		$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
		mysql_select_db ("tpFinal",$conexion) or die ("no db");
		
		
	?>
	</div>
</body>
</html>