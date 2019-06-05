<?php
	
	include_once('../modelo/conexion.php');

	$name = $_POST['nombres'];
	$lastname = $_POST['apellidos'];
	$mail = $_POST['correo'];
	$movil = $_POST['celular'];
	$pass = $_POST['clave'];


	$update = $db->query("UPDATE usuarios SET name='$name',lastname='$lastname', mail='$mail', movil='$movil', password='$pass'")or die('error'.mysqli_errno($db));

	echo "<script>alert('datos guardados exitosamente'); location.href='../miperfil.php'</script>";
	mysqli_close($db);
?>