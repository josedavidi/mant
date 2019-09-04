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
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
          <h3>Resumen de Procesos por mes</h3>

          <table class="display" id="myTable">
            <thead>
              <tr>
                <th>Mes</th>
                <th>Sistema</th>
                <th>Subsistema</th>
                <th>Equipo</th>
                <th>Proceso</th>
                <th>Estado</th>
              </tr>
            </thead>
            <tbody>
            <?php
              $procesoMes = $db->query("SELECT m.nombre as mn, p.nombre as pn, s.nombre as sn, ss.nombre as ssn, pm.estado as pme, eq.nombre as eqn FROM proceso_mes pm INNER JOIN meses m ON pm.id_mes = m.id INNER JOIN procesos p ON pm.id_proceso=p.id INNER JOIN sistemas s ON s.id=p.id_sistema INNER JOIN subsistemas ss ON ss.id=p.id_subsistema INNER JOIN equipos eq ON eq.id=pm.id_equipo");
              


              while($fila =  mysqli_fetch_array($procesoMes)){

                if($fila['pme']==0){
                  $estado = "No realizado";
                }else{
                  $estado = "Realizado";
                }

                echo "
                  <tr>
                    <td>".$fila['mn']."</td>
                    <td>".$fila['sn']."</td>
                    <td>".$fila['ssn']."</td>
                    <td>".$fila['eqn']."</td>
                    <td>".$fila['pn']."</td>
                    <td>".$estado."</td>
                  </tr> 
                ";
              }
            ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
    <script src="https://kit.fontawesome.com/fc6955f185.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  </body>
</html>