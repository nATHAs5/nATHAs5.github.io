<?php  
session_start();
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
          
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Catálogo</a>
          
           
          

        </div>
      

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo  $_SESSION['activo'];?> <img src="img/clie.PNG">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="cuenta.php">Mi cuenta</a>
          <a class="dropdown-item" href="salir.php">Salir</a>
        </div>
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
    </form>
  </div>
</nav>
<nav 
  <!-- Navbar content -->
</nav>


<h1>Bienvenido cliente</h1>
<a href="index.html">
<div> <img src="img/poster.png">
</div>
<div> <img src="img/pho.png">
</div>
<div> <img src="img/trip.png">
</div>
<div> <img src="img/calen.png">
</div>


<!-- Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>