<?php 

	include_once('../modelo/conexion.php');

	$name = $_POST["nombres"];
	$lastname = $_POST["apellidos"];
	$dni=$_POST["cedula"];
	$mail=$_POST["correo"];
	$movil=$_POST["celular"];
	$pass=$_POST["clave"];
	

	$update=$db->query("UPDATE usuarios SET name='$name',lastname='$lastname',dni='$dni',mail='$mail',movil='$movil',password='$pass'") or die('error'. mysqli_errno($db));
	if($update) 
	{
		echo "<script>
				alert('Datos guardados exitosamente....');
				location.href='../miperfil.php';


		</script>";
	}

	mysqli_close($db);


 ?>