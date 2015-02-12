<!DOCTYPE html>
<html lang="es">
<head>
	<title>INSERTAR FIESTAS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index1.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="lenguas1.php">LENGUAS</a></li>
				<li id="cl"><a href="fiestas1.php">FIESTAS POPULARES</a></li>
				<li id="cl"><a href="gastronomia1.php">GASTRONOMIA</a></li>
				<li id="cl"><a href="tradiciones1.php">TRADICIONES</a></li>
				<li id="cl"><a href="etnias1.php">GRUPOS ETNICOS</a></li>
				<li id="cl"><a href="index.php">SALIR</a></li>
			</ul>
		</nav>
	<?php
	include("conect.php");
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['fecha']) && !empty($_POST['fecha']) && isset($_POST['descripcion']) && !empty($_POST['descripcion']))
	{
		$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas al conectar");
		mysql_select_db($db_name,$con)or die ("problemas al conectar la bd");
		mysql_query("insert into fiestas (nombre, fecha, descripcion) values ('$_POST[nombre]', '$_POST[fecha]', '$_POST[descripcion]')",$con);
		echo "Datos insertados";
	}else{
		echo "Problemas al insertar datos";
	}
	?>
	</header>
	<footer id="pinferior">
		<div class="infor">
			Contactos: 2568546
		</div>
		<div class="derechos">
			Todos los derechos reservados 2015
		</div>
		<div class="logos">
			<img src="images/logo_ecuador.jpg">
			<img src="images/logoAllYouNeed.png">
		</div>
	</footer>	
</body>
</html>