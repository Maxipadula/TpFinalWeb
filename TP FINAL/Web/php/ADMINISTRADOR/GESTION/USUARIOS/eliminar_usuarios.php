<html>
 <?php include ("usuarios_datos.php"); ?>
 <?php include ('../../../rutas.php'); ?>
	<head>
 		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarModificarUser1.js"></script>
		<LINK REL="Stylesheet" HREF="../../css/login.css" TYPE="text/css">
	</head>
<body>
	<div id="divContenedor">
	<p>SELECCIONAR EL USUARIO QUE QUIERAS ELIMINAR</p>
	
	
		<?php
		
			if(!isset($_SESSION))
			{
				session_start();
			}
			include ('../../../rutas.php');
	
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			$consulta  = mysql_query ("SELECT U.id_usuario ID,U.nombre nombre,U.usuario usuario,U.pass contra,U.fecha_nacimiento fecha,U.num_doc numdoc,R.descripcion rol
									   FROM usuario U join
											rol R on R.codigo_rol = U.codigo_rol") or die (mysql_error());

			if ($row = mysql_fetch_array($consulta)){
			echo "<table border = '1'> \n";
			echo "<tr><td>NOMBRE Y APELLIDO</td><td>USUARIO</td><td>CONTRASEÑA</td><td>FECHA DE NACIMIENTO</td><td>NUMERO DE DOCUMENTO</td><td>ROL</td></tr>     \n";
			do{
				echo "<tr><td>".$row["nombre"]."</td><td>".$row["usuario"]."</td><td>".$row["contra"]."</td><td>".$row["fecha"]."</td><td>".$row["numdoc"]."</td><td>".$row["rol"]."</td><td><a href='".$validar_eliminacion_usuario."?ID=".$row["ID"]."' class = 'tabla'>Eliminar</a></td></tr> \n";     
			} while ($row = mysql_fetch_array ($consulta));
			echo "</table> \n";
			
			
		} else {
			echo "no se encontraron ningun registro";
		} 
					
		?>
</body>
</html>