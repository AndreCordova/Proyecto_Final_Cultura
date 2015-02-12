<!DOCTYPE html>
<html lang="es">
<head>
	<title>ELIMINAR FIESTAS</title>
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
	$con=mysql_connect($db_host,$db_user,$db_pass)or die("problemas en server");
	mysql_select_db($db_name,$con)or die ("problemas en bd");
	$reg=mysql_query("select nombre from fiestas where nombre='$_POST[nombre]'",$con);
	if($re=mysql_fetch_array($reg))
	{
		mysql_query("delete from fiestas where nombre='$_POST[nombre]'",$con);
		echo "Datos eliminados";
	}else{
		echo "Datos no han sido eliminados";
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