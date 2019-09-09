<?php 

	include_once("conexion.php");
	$equipo=$_POST['equipos'];
	$meses = $_POST["meses"];
 	$proceso= $_POST["cprocesos"];
 	$estado=0;

 	$validarProcesoMes= $db->query("SELECT id_proceso, id_mes FROM proceso_mes WHERE id_equipo='$equipo' AND id_mes='$meses'AND id_proceso='$proceso'")or die('error'. mysqli_errno($db));

if(mysqli_num_rows($validarProcesoMes)>0){
	echo "Este proceso ya ha sido registrado en el mes seleccionado";
	return false;

}

  	$guardarProceso= $db->query("INSERT INTO proceso_mes VALUES(0,'$equipo','$proceso','$meses','$estado')")or die('error'. mysqli_errno($db));
	if($guardarProceso) 
	{
		echo "<script>
				alert('Datos guardados exitosamente....');
				location.href='../mesProceso.php';


		</script>";
	}

	mysqli_close($db);

 ?>