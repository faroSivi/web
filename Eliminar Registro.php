<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Registros</title>
</head>
<body>
<?php 
		$server= "localhost";
		$usuario= "root";
		$contraseña= "";
		$bd= "ejemplo";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("Error en la conexion...");

		$clave = $_POST["txtClave"];

		mysqli_query($conexion, "DELETE from datos where clave= '$clave'")
			or die ("Error al eliminar los datos...");

		mysqli_close($conexion);
			echo "Datos eliminados correctamente....";
	?>
<form method="POST" action="index.html">
		<input type="submit" value="Volver" name="btnVolver">
	</form>

    
</body>
</html>