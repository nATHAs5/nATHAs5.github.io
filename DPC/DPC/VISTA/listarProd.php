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
<nav> 
  <!-- Navbar content -->
</nav>
</table>
<h2>Productos Gestionados</h2>
<b></b>
<table class="table">
<thead>
  <tr>
    <th>
      Código
</th>
<th>
  Nombre
</th>
<th>
 Precio
</th>
<th>
  Stock
</th>
<th>
  Medidas
</th>
<th>
  Descripción

</thead>

 <body>
  <tbody>
    <?php
foreach ($cuenta->listarProd()as $reg=>$valor){
?>
<tr>
  <td>
    <?php echo $valor['prod_codigo']; ?>
  </td>
  <td>
    <?php echo $valor['prod_nombre']; ?>
  </td>
  <td>
    <?php echo $valor['prod_PrecioVenta']; ?>
  </td>
  <td>
  <?php echo $valor['prod_stock']; ?>
  </td>
  <td>
  <?php echo $valor['prod_unidadMedida']; ?>
  </td>
  <td>
    <?php echo $valor['prod_descripcion']; ?>
  </td>
  <th>

</th>
<th>
   <a href="confirmarBorrar2.php?cod=<?php echo $valor['prod_codigo']?>&nombre=<?php echo $valor['prod_nombre']?>"><img src="img/eliminar.png"></a>
</th>
<th>
  <a href="actualizar_prod.php?cod=<?php echo $valor['prod_codigo']?>"> <img src="img/lapiz.png">
</th>
</a>
  </tbody>

  <?php
}
  ?>
  <img src="img/impresora.png" onclick="imprimir()">
<script type="text/javascript">
function imprimir() {
  if (window.print) {
    window.print();
  } else {
    alert("La función de impresión no está soportada por su navegador.");
  }
  }
</script>



 



<!-- Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/validar.js"></script>​
</body>