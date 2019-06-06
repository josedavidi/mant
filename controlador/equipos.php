<?php
	
	include_once('../modelo/conexion.php');

	$id = $_GET['id_subs'];

	$equipos = $db->query("SELECT * FROM equipos WHERE id_subsistema='$id' ")or die('error'.mysqli_errno($db));
?>

<select name="equipos" class="custom-select">
	<option value="#">Elige el equipo</option>
	<?php
		while($fila=mysqli_fetch_array($equipos)){
			echo "<option>".$fila['nombre']."</option>";
		}
	?>
</select>