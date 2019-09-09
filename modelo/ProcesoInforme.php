<?php 

include_once('conexion.php');

$equipo_id=$_GET['equipo'];
$proceso_id=$_GET['proceso'];
$fecha=date('Y-m-d');
$periodo=date('Y');
$mes=$_GET['mes'];

$validarSiExiste= $db->query("SELECT * FROM proceso_informe WHERE equipo_id='$equipo_id' AND proceso_id='$proceso_id' AND fecha='$fecha'")or die('error'.mysqli_errno($db));

if(mysqli_num_rows($validarSiExiste)>0){
	echo "<i class='fas fa-exclamation-triangle fa-lg text-danger'></i> Alerta, Este proceso ya registrado";
	
	return false;
}


$guardarProcesoInforme=$db->query("INSERT INTO proceso_informe VALUES(0,'$equipo_id','$proceso_id',1,'$periodo','$mes','$fecha')") or die("error".mysqli_errno($db));
if($guardarProcesoInforme){
	echo "<i class='far fa-save fa-lg '></i> Proceso Guardado";

}
mysqli_close($db);

 ?>