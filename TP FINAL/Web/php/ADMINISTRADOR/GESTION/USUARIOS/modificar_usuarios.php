<html>
 <?php include ("usuarios_datos.php"); ?>
 <?php 	include ('../../../rutas.php');?>
 	<head>
 		<script type="text/javascript" src="../../../../js/funciones/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="../../../../js/funciones/validarAgregarPermiso.js"></script>
	</head>
<body>
	<div id="divContenedor">
		</br>
		<p>SELECCIONAR USUARIO A MODIFICAR</p>
		<p>Colocar tipo y numero de documento del usuario a modificar: </p>
		<form class='contacto' method="post" action="<?php echo $usuario_a_modificar ?>">
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
					<input type="text" name="numero_usuario_modificar" id="numDoc" class="numDoc" placeholder="Documento" />
					<div id="mensaje1" class="errores"> Ingresa solo numeros</div>
				</div>
				</br>

				<input type="submit" value="Seguir" class="boton" id="boton">
				<input type='button' onclick='history.back()' name='volver atrás' value='Volver' class="boton" />

			</div>
		</form>
	</div>
</body>
</html>



