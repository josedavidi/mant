<?php
	
	include_once('../modelo/conexion.php');
	session_start();

	$user = $_POST['usuario'];
	$pass = $_POST['clave'];

	$usuarios = $db->query("SELECT * FROM usuarios WHERE nickname='$user' AND password='$pass'")or die('error'.mysqli_errno($db));

	$datos = mysqli_fetch_array($usuarios);

	if(mysqli_num_rows($usuarios)>0)
	{
		$_SESSION['session'] = $datos['id'];;
		$_SESSION['names'] = $datos['name'];
		header('location:../inicio.php');
	}
	else
	{
		echo "Datos incorrectos";
	}

	mysqli_close($db);

?>