<?php
require_once('controlador.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$identificacion=$_POST['identificacion'];
$tipo=$_POST['tipo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$roles=$_POST['roles'];


$insertar= NEW Model;
$insertar->insertar($identificacion,$tipo,$nombre,$apellido,$celular,$direccion,$usuario,$clave,$roles);
?>