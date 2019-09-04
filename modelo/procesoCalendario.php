<?php
	include_once("conexion.php");
	$equipo = $_POST['equipos'];
	$mes = $_POST["mes"];
	$proceso = $_POST["cprocesos"];
	$estado = 0;


	$validarProcesoMes = $db->query("SELECT id_proceso, id _mes FROM proceso_mes WHERE id_equipo='$equipo' AND id_mes='$mes' AND id_proceso='$proceso'");

	if(mysqli_num_rows($validarProcesoMes)>0){
		echo "Este proceso ya ha sido registrado en el mes seleccionado ";
		return false;
	}

	$guardarProceso =$db->query("INSERT INTO proceso_mes VALUES(0,$equipo,$proceso,$mes,$estado)")or die("error".mysqli_errno($db));

	if($guardarProceso){
		header("location:../mesProceso.php");
	}

	mysqli_close($db);
?>