<?php
require_once('../CONTROLADOR/controlador.php');
session_start();
$cuenta = new Model;
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

</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">DPC</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> ¡Bienvenidx!<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contactanos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Catálogo</a>
          <a class="dropdown-item" href="#">Promociones</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Método de Pago</a>
         
          

        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Registrate</a>
        <div class="dropdown">
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<nav> 
  <!-- Navbar content -->
</nav>
<h2>Gestionar Usuarios</h2>
<b></b>
<table class="table">
<thead>
  <tr>
    <th>
      ID
</th>
<th>
  Nombre
</th>
<th>
  Apellido
</th>
<th>
  Rol
</th>


</thead>

 <body>
  <tbody>
    <?php
foreach ($cuenta->listar()as $reg=>$valor){
?>
<tr>
  <td>
    <?php echo $valor['usua_codigo']; ?>
  </td>
  <td>
    <?php echo $valor['usua_nombre']; ?>
  </td>
  <td>
    <?php echo $valor['usua_apellido']; ?>
  </td>
  <td>
  <?php echo $valor['usua_rol']; ?>
  </td>
  <th>
  <a href="actualizarusu.php?id=<?php echo $valor['usua_codigo']?>&nombre=<?php echo $valor['usua_nombre']?>"><img src="img/eliminar.png"></a>
</th>
<th>
  <a href="actualizarusu.php?id=<?php echo $valor['usua_codigo']?>">
  <img src="img/lapiz.png">
</a>
</th>
  </tbody>
  <?php
}
  ?>

</tr>
</table>
<!-- Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/validar.js"></script>​
</body>