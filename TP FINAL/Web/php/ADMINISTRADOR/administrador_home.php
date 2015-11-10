<html>
<meta charset="UTF-8">

<?PHP
	include ("../rutas.php");
	 session_start();
	 
	 	$permiso = "administrador home";
				
			$conexion = mysql_connect($puerto, $usuario,$password) or die("no conecta");
			mysql_select_db ("tpFinal",$conexion) or die ("no db");
			
			include("../permiso.php");
			
	  if ( isset ($_SESSION["nombre"])){
		
	   $nombre = $_SESSION["nombre"];
	   
	   }
	   else{
		     session_destroy();
    
           header("location:login.php");
	   }
?>

<html>
<meta charset="UTF-8">
	<head>
		<LINK REL="Stylesheet" HREF="../../css/login.css" TYPE="text/css">
	</head>
	
<body>
		  <?php include ("../rutas.php"); ?>
<div id='divHeader'>
			<h1> Sistema de Gestión Logistica</h1>
			<div id="bienvenido"> Bienvenido, <?php echo $_SESSION["nombre"]; ?></div>
		</div>
	<nav id='divNav' >
		<ul>
		 	<li><a href="./<?php echo $graficos ?>/<?php echo $graficos_datos?>">CONSULTAR GRAFICOS</a></li>
       		<li> <a href="./<?php echo $registrar_datos ?>">GESTIONAR RECURSOS</a></li>
            <li><a href="../<?php echo $login ?>">SALIR</a></li>
		</ul>
 
	</nav>
	<div id="divContenedor">


		</div>
</body>

</html>