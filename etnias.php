<!DOCTYPE html>
<html lang="es">
<head>
	<title>GRUPOS ETNICOS</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li id="logo"><a href="index.html"><img src="images/logo1.jpg"></a></li>
				<li id="cl"><a href="index.html">Inicio</a></li>
				<li id="cl"><a href="lenguas.php">Lenguas</a></li>
				<li id="cl"><a href="fiestas.php">Fiestas Populares</a></li>
				<li id="cl"><a href="gastronomia.php">Gastronomia</a></li>
				<li id="cl"><a href="tradiciones.php">Tradiciones</a></li>
				<li id="cl"><a href="etnias.php">Grupos Etnicos</a></li>
				<li id="cl"><a href="administrador.php">Administrador</a></li><br/><br/>
			</ul>
		</nav>
		<img src="images/etnias.jpg" width="800" height="500" alt=""><br/><br/>
		<?php
	include("conect.php");
	$sql_listar="select * from etnias";
	$res_sql=mysql_query($sql_listar,$link);
	echo "<table cellspacing=60 align=center bgcolor='#98AFC7' border=8>";
	echo "<tr>";
		echo "<td>NOMBRE</td>";
		echo "<td>NUMERO DE HABITANTES</td>";
	echo "</tr>";
	while ($row = mysql_fetch_array($res_sql)) {
		echo "<tr text=center>";
			echo "<td>".$row['nombre']."</td>";
			echo "<td>".$row['habitantes']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<nav>
		<ul>
			<form action="select-etnias.php" method="post" name="form"><br/>
			<input type="text" name="nombre" placeholder="Nombre de la etnia"/><br/><br/>
			<input type="submit" value="Buscar"/>
			</form>
		</ul>
	</nav>
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