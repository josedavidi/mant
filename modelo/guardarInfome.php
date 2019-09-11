<?php 

include_once('conexion.php');

 $equipoId = $_POST['equipo'];
 $user=$_POST['id_user'];
 $estado=$_POST['estado'];
 $desc=$_POST['desc'];
 $fecha=$_POST['fecha'];

 $mes = $_POST['mes'];
 $periodo = date('Y');

 $dir_subida = '../imagenes/';
 $fichero_subido =  $dir_subida.basename($_FILES['foto']['name']);

 if(move_uploaded_file($_FILES['foto']['tmp_name'],$fichero_subido)){
 	echo "La imagene fue cargado correctamente";
 }else{
 	echo "Error al subir la imagen a servidor";
 }

$guardarInforme = $db->query("INSERT INTO informes VALUES(0,'$equipoId','$mes','$periodo','$user','$fichero_subido','$estado','$desc','$fecha')")or die('error'.mysqli_errno($db));

	if($guardarInforme){
		echo "<script>alert('Informe Guardado exitosamente...'); location.href='../cronograma.php'</script>";
	}
	mysqli_close($db);

 ?>