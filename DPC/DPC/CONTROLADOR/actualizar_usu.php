<?php
require_once('controlador.php');
// Instalar la clase MODELO que es la clase general que se encuentra en el archivo Model
$actualizar=NEW Model;
$identificacion=$_POST['identificacion'];
$tipo=$_POST['tipo'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$celular= $_POST['celular'];
$direccion= $_POST['direccion'];
$usuario= $_POST['usuario'];
$clave= $_POST['clave'];
$codigo= $_POST['codigo'];
$actualizar->ActualizarUsuario($identificacion,$tipo,$nombre,$apellido,$celular,$direccion,$usuario,$clave,$codigo);
?>