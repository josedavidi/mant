<?php
	include_once('../modelo/conexion.php');

	$id_sistema = $_GET["idsistema"];

	$subsistemas = $db->query("SELECT * FROM subsistemas WHERE id_sistema='$id_sistema'")or die('error'.mysqli_errno($db));
?>

<select class="custom-select" id="subsistema">
	<option value="#">Elige el subsistema</option>
	<?php
		while ($fila = mysqli_fetch_array($subsistemas)) {
			echo "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
		}
	?>
</select>