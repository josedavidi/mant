<?php
	
	include_once("../modelo/conexion.php");
	$idSubsistema = $_GET['subsistema'];
	$procesos = $db->query("SELECT * FROM procesos WHERE id_subsistema='$idSubsistema'")or die("error".mysqli_errno($db));
?>
<select name="cprocesos" class="custom-select">
<?php
		while($fila = mysqli_fetch_array($procesos)){
		echo "<option value='".$fila['id']."'>(".$fila['id'].")".$fila['nombre']."</option>";
		}
	?>	
</select>
<button class="btn btn-success btn-block">Registrar</button>