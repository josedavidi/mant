<?php
  session_start();

  include_once('modelo/conexion.php');

  if(empty($_SESSION['session']))
  {
    header('location:index.php');
  }

  $idUser = $_SESSION['session'];

  $usuario = $db->query("SELECT * FROM usuarios WHERE id='$idUser'")or die('error'.mysqli_errno($db));

  $datos = mysqli_fetch_array($usuario);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>Cronograma</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <!-- inicia menu -->
          <?php include_once('menu.php'); ?>
          <!-- termina menu -->
        </div>  
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <br>
          <h3>Cronograma</h3>
          <div class="row">
            <div class="col-sm-4">
              <select class="custom-select" name="sistema" id="sistema">
                <option>Selecciona el Sistema</option>
                <?php
                  $sistemas = $db->query("SELECT * FROM sistemas")or die('error'.mysqli_errno($db));

                  while($fila = mysqli_fetch_array($sistemas)){
                    echo "<option value='".$fila['id']."'>".$fila['nombre']."</option>";
                  }
                ?>
              </select>
            </div>
            <div class="col-sm-4">
              <div id="subsystem"></div>
            </div>
            <div class="col-sm-4">
              <div id="equipment"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8" style="margin-top: 4%">
          <div id="process"></div>
        </div>
        <div class="col-sm-4">
          <br>
          <h3>Detalles del Trabajo</h3>
          <hr>
          <form>
            <b>Agregar fotografias</b>
            <input type="date" name="" class="form-control">
            <br>
            <input type="file" name="" class="form-control">
            <br>
            <b>Estado</b>
            <select class="custom-select">
              <option>Ok</option>
              <option>Mantenimiento</option>
              <option>Dañado</option>
            </select>
            <br><br>
            <b>Observacion</b>
            <textarea class="form-control"></textarea>
            <br>
            <button class="btn btn-success">Guardar Actividad</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/fc6955f185.js"></script>
    <script src="js/selects.js"></script>
    <script>
      $(document).ready(function(){
        $("#subsystem").change(function(){
            var subsistem=$("#subsistema").val();
            
            $.ajax({
              url:"controlador/equipos.php",
              type:"GET",
              data:"id_subs="+subsistem,
              beforeSend:function(){
                $("#equipment").html('Por favor espere...');
              },
              success:function(respuesta){
                $("#equipment").html(respuesta);
              }
            })
        })
      })
    </script>
    <script src="js/procesos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>