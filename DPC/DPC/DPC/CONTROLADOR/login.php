<?php
require_once('controlador.php');
$ingresar= NEW Model;
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$ingresar->loguin($usuario,$clave);

?>