<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NOVA</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">NOVATECHNOLOGY</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!--<li class="nav-item">
            <a class="nav-link" href="">Catalogo
              <span class="sr-only">(current)</span>
            </a>
          </li>-->
          <!--<li class="nav-item active">
            <a class="nav-link" href="<?= base_url("index.php/Tienda/registro") ?>">Registrarse</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("index.php/tienda2/index")?>">Entrar</a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        -->
        </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <!--
        <h1 class="my-4">TiendaSHOP</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Mujeres</a>
          <a href="#" class="list-group-item">Hombres</a>
          <a href="#" class="list-group-item">Niños</a>
        </div>
      -->

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">



          <div class="col-xs-12 col-md margenes-1">

            <h2>Registro de un nuevo usuario</h2>

            <form>
              <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba aquí" required="required">
              </div>
              <div class="form-group">
                <label>Apellido Paterno</label>
                <input type="text" name="app" id="app" class="form-control" placeholder="Escriba aquí" required="required">
              </div>
              <div class="form-group">
                <label>Apellido Materno</label>
                <input type="text" name="apm" id="apm" class="form-control" placeholder="Escriba aquí">
              </div>
              <div class="form-group">
                <label>Correo electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Escriba aquí" required="required">
              </div>
              <div class="form-group">
                <label>Fecha de nacimiento</label>
                <input type="date" name="nacimiento" id="nacimiento" class="form-control" required="required">
              </div>
              <div>
                <button type="submit" class="btn btn-primary" name="aceptar" id="aceptar">Aceptar</button>
              </div>
            </form>
          </div>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; NOVATECHNOLOGY</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>