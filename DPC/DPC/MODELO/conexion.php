<?php
class conexion{
public function conectar(){
$dsn="mysql:host=localhost;dbname=dpc;port=3306;charset=utf8";
$usuario="root";
$clave="";
return new PDO($dsn, $usuario, $clave);
	}
}
?>