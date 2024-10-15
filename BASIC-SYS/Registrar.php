<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
<?php 
		$server="localhost";
		$usuario="root";
		$contraseña="";
		$bd="ejemplo";

		$conexion= mysqli_connect($server, $usuario, $contraseña, $bd)
			or die ("Error en la conexi n....");

		//$orden = $_POST['txtOrden'];//
		$clave = $_POST['txtClave'];
		$nombre = $_POST['txtNombre'];
		$sexo = $_POST['cmbSexo'];

		$insertar = "INSERT into datos values ('$usuario', '$clave', '$nombre', '$sexo')";

		$resultado = mysqli_query($conexion, $insertar)
			or die ("Error al insertar los registros...");

		mysqli_close($conexion);
		echo "Datos insertados correctamente...";
	?>
<form method="POST" action="index.html">
		<input type="submit" value="Volver" name="btnVolver">
	</form>
</body>
</html>