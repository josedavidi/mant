<?php
	
	include_once("../modelo/conexion.php");

	$idSubsistema = $_GET['subsistema'];

	$procesos = $db->query("SELECT * FROM procesos WHERE id_subsistema='$idSubsistema'")or die("error".mysqli_errno($db));

?>

<table class="table table-striped table-bordered">
	<tr>
		<th>Tipo</th>
		<th>Nombre</th>
	</tr>
	<?php
		while($fila = mysqli_fetch_array($procesos)){
		echo "<tr>
				<td>".$fila['tipo']."</td>
				<td>".$fila['nombre']."</td>
			  </tr>";
		}
	?>
</table>
