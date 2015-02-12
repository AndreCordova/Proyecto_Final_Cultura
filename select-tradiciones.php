<!DOCTYPE html>
<html lang="es">
<head>
	<title>BUSCADOR TRADICIONES</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="lenguas.php">LENGUAS</a></li>
				<li id="cl"><a href="fiestas.php">FIESTAS POPULARES</a></li>
				<li id="cl"><a href="gastronomia.php">GASTRONOMIA</a></li>
				<li id="cl"><a href="tradiciones.php">TRADICIONES</a></li>
				<li id="cl"><a href="etnias.php">GRUPOS ETNICOS</a></li>
				<li id="cl"><a href="administrador.php">ADMINISTRADOR</a></li>
			</ul>
		</nav>
	<?php
	include("conect.php");
	$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas en server");
	mysql_select_db($db_name,$con)or die ("problemas en bd");
	$registro=mysql_query("select * from tradiciones where nombre='$_POST[nombre]'")or die ("problema en consulta:".mysql_error());
	while ($reg=mysql_fetch_array($registro)){
		echo $reg['nombre']."<br>";
		echo $reg['fecha']."<br>";
		echo $reg['descripcion']."<br>";
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