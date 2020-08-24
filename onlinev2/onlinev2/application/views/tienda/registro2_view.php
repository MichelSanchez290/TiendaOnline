<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TiendaSHOP</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css/shop-homepage.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>assets/css/estilos.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">TiendaSHOP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!--<ul class="navbar-nav ml-auto">-->
          <!--
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>">Catalogo
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('index.php/Tienda/registro') ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("index.php/Tienda/login") ?>">Entrar</a>
          </li>
        -->
          
          <!--<li class="nav-item name-user">
            //<?
            //$nombre = 'Nombre';
            //if ($usuarios!=false) {
              //$usuario = $usuarios->row(0);
              //$nombre = "$usuario->nombre $usuario->a_paterno $usuario->a_materno";
            //}
            //echo $nombre;
            ?>
          </li>-->
        
        <!--</ul>-->
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">TiendaSHOP</h1>
        <div class="list-group">
          <a href="<?= base_url('index.php/tienda/index') ?>" class="list-group-item">Agregar nuevo</a>
          <a href="<?= base_url('index.php/tienda/login') ?>" class="list-group-item">Catalogo general</a>
          <a href="<?= base_url('index.php/tienda/index') ?>" class="list-group-item">Salir</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">

          <div class="col-xs-12 col-md margenes-1">

            <h2>Productos registrados</h2>

            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>nombre</th>
                  <th>marca</th>
                  <th>categoria</th>
                  <th>Precio</th>
                  <th>precio</th>
                  <th>descripcion</th>
                  <th>f_registro</th>
                  <th>estado</th>
                  <th style="width: 20%">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?
                
                if($productos!=false){
                  foreach($productos->result() as $productos){
                    ?>
                    <tr>
                      <td>-</td>
                      <td><?= $productos->nombre ?></td>
                      <td><?= $productos->marca ?></td>
                      <td><?= $productos->categoria ?></td>
                      <td><?= $productos->precio ?></td>
                      <td><?= $productos->descripcion ?></td>
                      <td><?= $productos->f_registro ?></td>
                      <td><?= $productos->estado ?></td>
                      <td>
                        <a href="<?= base_url('index.php/tienda/editar/').$producto->id_producto ?>" class="btn btn-primary">Editar</a>
                        <a href="<?= base_url('index.php/tienda/borrar/').$producto->id_producto ?>" data-number="<?= $conta ?>" data-name="<?= $producto->nombre ?>" class="btn btn-warning btn-borrar">Borrar</a>
                      </td>
                    </tr>
                    <?
                  }
                }

                ?>
              </tbody>
            </table>


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
      <p class="m-0 text-center text-white">Copyright &copy; TiendaSHOP 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!--<script>
    $(function(){

      $('.btn-borrar').on('click', function(){
        var nombre = $(this).attr('data-name');
        var numero = $(this).attr('data-number');
        if (confirm('Desea borrar el producto No. '+ numero +' - '+ nombre +' ?')) {
          alert("Producto eliminado exitosamente");
          return true;
        }
        return false;
      });

    });
  </script>-->

</body>

</html>