<?php
require_once('controlador.php');
// Instalar la clase MODELO que es la clase general que se encuentra en el archivo Model
$actualizar=NEW Model;
$codigo= $_POST['codigo'];
$nombre= $_POST['nombre'];
$precio= $_POST['precio'];
$stock= $_POST['stock'];
$medida= $_POST['medida'];
$foto= $_POST['foto'];
$descripcion= $_POST['descripcion'];
$actualizar->ActualizarProducto($codigo,$nombre,$precio,$stock,$medida,$foto,$descripcion);
?>