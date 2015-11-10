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
	
	<form class='contacto' method="post" action="<?php echo $validar_eliminacion_usuario ?>">
	
		<div id="contacto">
				<div><label>INGRESAR TIPO DE DOCUMENTO:</label>
					</br>
					 <select name="tipo_usuario_modificar"> 
					 <option value="nada" selected="selected"></option>
					 <option value="DNI">DNI</option>
                     <option value="Libreta Enrolamiento">Libreta de enrolamiento</option>
                     <option value="Libreta Civica">Libreta civica</option>
                     </select>
				</div>
				</br>
				<div><label>INGRESAR NUMERO DE DOCUMENTO:</label>
					</br>
					<input type="text" name="numero_usuario_eliminar" id="numDoc" class="numDoc" placeholder="Documento"/>
					<div id="mensaje1" class="errores"> Ingresa solo numeros</div>
				</div>
				</br>
				<input type="submit" value="Eliminar" class="boton" id="boton"/>
		</div>				
		</div>
</body>
</html>