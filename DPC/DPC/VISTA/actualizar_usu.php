<?php
require_once('../CONTROLADOR/controlador.php');
session_start();
$cuenta = new Model;
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DPC(dreams in paper clouds</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/misestilos.css">
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light barra">
  <a class="navbar-brand" href="#"><img src="img/pp.png"></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> ¡Bienvenidx!<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Catálogo</a>
         
          

        </div>
      </li>
      

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<nav 
  <!-- Navbar content -->
</nav>
<?php
foreach ($cuenta->mostrarCuenta($id) as $reg=>$valor)
{
  ?>
<form action="../CONTROLADOR/actualizar_usu.php" method="POST">
  <h1>Mi cuenta</h1>
    <label>identificacion</label>
    <input type="text" name="identificacion" id="identificacion" value="<?php echo $valor['usua_identificacion'];?>">
    <p>
      <br>
    <label>tipo_identificacion</label>
    <input type="text" name="tipo" id="tipo" value="<?php echo $valor['usua_tipoIdentificacion'];?>"> 
     <label>nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $valor['usua_nombre'];?>">
     <label>apellido</label>
    <input type="text" name="apellido" id="apellido"value="<?php echo $valor['usua_apellido'];?>">
     <label>celular</label>
    <input type="text" name="celular" id="celular"value="<?php echo $valor['usua_celular'];?>">
     <label>direccion</label>
    <input type="text" name="direccion" id="direccion"value="<?php echo $valor['usua_direccion'];?>">
     <label>usuario</label>
    <input type="text" name="usuario" id="usuario"value="<?php echo $valor['usua_usuario'];?>">
     <label>clave</label>
    <input type="password" name="clave" id="clave"value="<?php echo $valor['usua_password'];?>">  
    <label>codigo</label>
    <input type="text" name="codigo" id="codigo" value="<?php echo $valor['usua_codigo'];?>">     
    <button type="submit">Enviar</button>
    <p>
      <div id="mensaje" style="background:#DDF999;width:300px;">
        </div>
</form>

 <body>
 <?php
}
?>
<!-- Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/validar.js"></script>​
</body>