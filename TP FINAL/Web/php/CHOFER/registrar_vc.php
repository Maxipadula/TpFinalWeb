<html>
	<head>
	</head>
	
	<body>
	<?php include ("menu_chofer.php");?>
		<?php
			 session_start();
			 
			 $permiso = "registrar vale";

			 $id = $_SESSION["id_usuario"];
			 
				include ('../rutas.php');
	
	$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
	mysql_select_db ("tpFinal",$conexion) or die ("no db");
	
	include("../permiso.php");
			 

		?>
			<h2> VALE DE COMBUSTIBLE </h2>
			
			<form class='contacto' method="post" action="<?php echo $validar_vc?>">
			<div id="contacto">
				
				</br>
				<div><label>FECHA Y HORA
					<input type="text" name="fecha_hora_vc">
					</label>
				</div>
				
				</br>
				
				<div><label>LUGAR
					<input type="text" name="lugar_vc">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>COSTO
					<input type="text" name="costo_vc">
					</label>
				</div>
				</br>
				
				</br>
				
				<div><label>CANTIDAD
					<input type="text" name="cantidad_vc">
					</label>
				</div>
				</br>
		
			<input type="submit" value="Registrar">
			<input type="reset" value="Borrar Todo">

	</body>
</html>