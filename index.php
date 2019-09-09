<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src=" https://code.jquery.com/jquery-3.4.1.min.js"></script> 
    <title>Iniciar Sesion</title>
  </head>
  <body>
    
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="margin-top:5%">
      <center>
     <img src="imagenes/flacso.png" width="100px" height="100px">
    <img src="imagenes/rojas.png" width="100px" height="100px">
    </center>
    <br>
    <br>
      <h2 class="text-center">Iniciar Sesion</h2>
        <form action="controlador/procesarLogin.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuario" class="form-control" required>
        <br>
        <input type="password" name="clave" placeholder="Clave" class="form-control" required>
        <br>
        <button class="btn btn-primary btn-block">Ingresar</button>

      </form>


    </div>

    <div class="col-sm-4"></div>
  </div>


</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
  </body>
</html>