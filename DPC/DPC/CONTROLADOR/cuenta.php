<?php
requiere_once('controlador.php');
$ingresar = NEW model;

$usu=$_POST['usu'];
$clave=$_POST['clave'];

$ingresar->loguin($usu,$clave);
?>