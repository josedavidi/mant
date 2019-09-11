<?php
	include_once('../modelo/conexion.php');
$equipo = $_GET['equipoId'];
$periodo = $_GET['periodoId'];

$informes = $db->query("SELECT informes.id as infome_id, meses.nombre as mes_name FROM informes INNER JOIN meses ON informes.mes_id = meses.id WHERE equipo_id='$equipo' AND periodo = '$periodo'")or die('error'.mysqli_errno($db));
?>

<table class="table">
	<tr>
		<th>ID</th>
		<th>MES</th>
		<th>EQUIPO</th>
		<th>ESTADO</th>
		<th>OBSERVACIONES</th>
		<th>EVIDENCIA</th>
		<th>RESPONSABLE</th>
		<th>FECHA</th>
	</tr>
	<?php
		while($fila=mysqli_fetch_array($informes)){
			echo "<tr>
				<td>".$fila['infome_id']."</td>
				<td>".$fila['mes_name']."</td>
			</tr>";
		}
	?>
</table>

