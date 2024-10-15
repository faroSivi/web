<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Registros</title>
</head>
<body>
<?php
		$server="localhost";
		$usuario="root";
		$contraseña="";
		$bd="ejemplo";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("Error en la conexion...");

		$consulta = mysqli_query($conexion, "SELECT * from datos" )
			or die ("Error al traer los datos...");

		echo "<table border = '1'>";
		echo "<tr>";
		echo "<th id= 'orden'>Orden</th> ";
		echo "<th id= 'clave'>Clave</th> ";
		echo "<th id= 'nombre'>Nombre</th> ";
		echo "<th id= 'sexo'>Sexo</th> ";
		echo "</tr>";

		while ($extraido = mysqli_fetch_array($consulta))
		{
			echo "<tr>";
			echo "<td>".$extraido["Orden"]."</td>";
			echo "<td>".$extraido["Clave"]."</td>";
			echo "<td>".$extraido["Nombre"]."</td>";
			echo "<td>".$extraido["Sexo"]."</td>";
			echo "</tr>";
		}

		mysqli_close($conexion);
			echo "</table>";
	?>
	<form method="POST" action="index.html">
		<input type="submit" value="Volver" name="btnVolver">
	</form>

</body>
</html>