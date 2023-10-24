<?php
require_once('controlador.php');
// instanciar la clase Modelo que es la clase general que se encuentra en al archivo Model
$cod=$_GET['cod'];
$elimina = NEW Model;
$elimina->elimina($cod);
?>