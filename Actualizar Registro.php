<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos</title>
</head>
<body>
<?php
		$server= "localhost";
		$usuario= "root";
		$contraseña= "";
		$bd= "ejemplo";

		$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("Error en la conexion....");

		$clave = $_POST['txtClave'];
		$nombre = $_POST['txtNombre'];
		$sexo = $_POST['cmbSexo'];

		mysqli_query($conexion, "UPDATE datos set nombre='$nombre', sexo= '$sexo' where clave='$clave'")
			or die ("Error al actualizar datos...");

		mysqli_close($conexion);
		echo "Datos actualizados correctamente...";
	?>
<form method="POST" action="index.html">
		<input type="submit" value="Volver" name="btnVolver">
	</form>
    
</body>
</html>