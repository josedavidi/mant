<?php 
session_start();

include_once('modelo/conexion.php');

if (empty($_SESSION['session']))
{
  header('location:index.php');
}
$idUser=$_SESSION['session'];

$usuario=$db->query("SELECT * FROM usuarios WHERE id='$idUser'") or die ('error'.mysqli_errno($db));
$datos=mysqli_fetch_array($usuario);

 ?>   
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Mi Perfil</title>
  </head>
  <body>
    <div class="container">
       <div class="row">
         <div class="col-sm-12">
           <!-- inicia menu -->
      <?php include_once('menu.php');
      ?>
         </div>
       </div>
    </div>
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">  
    <br>
    <center>
<h2> Actualizar Datos </h2></center> 
<form action="controlador/editarPerfil.php" method="POST">
  <input type="text" name="nombres" class="form-control" required  placeholder="Nombres" value="<?php echo $datos['name'] ?>"><br>
  <input type="text" name="apellidos" class="form-control" required  placeholder="Apellidos" value="<?php echo $datos['lastname'] ?>"><br>
  <input type="text" name="cedula" class="form-control" required  placeholder="Cedula" value="<?php echo $datos['dni'] ?>"><br>
  <input type="email" name="correo" class="form-control" required  placeholder="Correo" value=  "<?php echo $datos['mail'] ?>"><br>
  <input type="text" name="celular" class="form-control" required  placeholder="Celular"  value=  "<?php echo $datos['movil'] ?>"><br>
<input type="password" name="clave" class="form-control" required  placeholder="Clave"><br>
<button class="btn btn-success btn-block">Guardar</button>
</form>
     </div>
     <div class="col-sm-4">
      </div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>