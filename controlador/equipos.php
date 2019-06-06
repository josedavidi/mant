<?php
	
	include_once('../modelo/conexion.php');

	$id = $_GET['id_subs'];

	$equipos = $db->query("SELECT * FROM equipos WHERE id_subsistema='$id' ")or die('error'.mysqli_errno($db));
?>

<select name="equipos" class="custom-select" id="equipos">
	<option value="#">Elige el equipo</option>
	<?php
		while($fila=mysqli_fetch_array($equipos)){
			echo "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
		}
	?>
</select>