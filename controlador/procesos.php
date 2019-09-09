<?php
	
	include_once("../modelo/conexion.php");

	$equipo = $_GET['equipos'];
	$mes= $_GET['meses'];
	$procesos = $db->query("SELECT procesos.id, procesos.tipo, procesos.nombre FROM procesos INNER JOIN proceso_mes ON procesos.id=proceso_mes.id_proceso WHERE proceso_mes.id_mes='$mes' AND proceso_mes.id_equipo='$equipo'")or die("error".mysqli_errno($db));
	$fecha=date('Y-m-d');

?>
<div class="alert alert-primary" id="mensaje"></div>
<table class="table table-striped table-bordered">
	<tr align="center">
		<th>ID</th>
		<th>Tipo</th>
		<th>Nombre</th>
		<th><i class="fas fa-clipboard-list fa-lg"></i></th>
	</tr>
	<?php
		while($fila = mysqli_fetch_array($procesos)){

			/*$idProceso=$fila["id"];

		$buscarProcesoInforme=$db->query("SELECT * FROM proceso_informe WHERE equipo_id='$equipo' AND proceso_id='$idProceso' AND fecha='$fecha'");

		if(mysqli_num_rows($buscarProcesoInforme)>0){

			$estilo="disabled";

		}*/

		echo "<tr>
				<td>".$fila['id']."</td>
				<td>".$fila['tipo']."</td>
				<td>".$fila['nombre']."</td>
				<td><a class='btn btn-warning btn-sm btn_escucha'><i class='fas fa-check text-white'></i></a></td>
			  </tr>";
		}
	?>
</table>
<script src="js/guardarProcesoInforme.js"></script>