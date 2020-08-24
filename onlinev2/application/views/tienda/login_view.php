<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login NOVATECHNOLOGY</title>
    <!--<link rel="stylesheet" href="C:\Users\UTP\Documents\login-Nova\css\master.css">-->
    <link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/master.css"/>
  </head>
  <body>

    <div class="login-box">
      <img src="<?= base_url()?>assets/img/logo11.png" class="avatar" alt="Avatar Image">
      <h1>NOVATECHNOLOGY</h1>
      <form>
        
        <label for="username">Nombre</label>
        <input type="text" placeholder="Nombre">

        <label for="username">Apellido Paterno</label>
        <input type="text" placeholder="Apellido Paterno">

        <label for="username">Apellido Materno</label>
        <input type="text" placeholder="Apellido Materno">
        
        <label for="username">Correo</label>
        <input type="text" placeholder="Correo">
        
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña">
        <input type="submit" value="Comprobar datos">
        <a class ="etiqueta"href="<?= base_url("index.php/tienda2/index")?>">Entrar</a>
        <a class="etiqueta"href="<?= base_url("index.php/tienda2/registro")?>">Registrarse</a><br>
        <a href="#"></a>
      </form>
    </div>
  </body>
</html>
