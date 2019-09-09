<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="inicio.php">ROJAS INGENIERIA/FLACSO </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="informe.php">Informes <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cronograma.php">Cronograma</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="calendarioProcesos.php">Calendario Procesos</a>
                </li>
              </ul>
              <span class="navbar-text">
                <a href="miperfil.php">Hola, <?php echo $_SESSION['names']; ?></a> / <span><a href="controlador/salir.php">Salir</a></span>
              </span>
            </div>
          </nav>