<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Iniciar Sesion</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="margin-top: 12%">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>