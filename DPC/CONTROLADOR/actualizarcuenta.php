<?php
require_once('controlador.php')
// Instalar la clase MODELO que es la clase general que se encuentra en el archivo Model
$actualizar=NEW Mode;
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$usuario= $_POST['usuario'];
$celular= $_POST['celular'];
$clave= $_POST['clave'];
$id= $_POST['id'];

$actualizar->ActualizarCuenta($nombre,$apellido,$usuario,$celular,$clave,$id);
?>