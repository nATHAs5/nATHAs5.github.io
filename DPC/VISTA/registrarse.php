<?php
session_start();
?>

 
  <h1>Registrar usuario</h1>
  <form action='../CONTROLADOR/insertar_usuario.php'method='POST'>
    <label>Numero de Identificacion</label>
    <input type="text" name="identificacion"><p>
      <label>Tipo de Identificacion</label>
    <input type="text" name="tipo"><p>
      <label>Nombre</label>
    <input type="text" name="nombre"><p>
      <label>Apellido</label>
    <input type="text" name="apellido"><p>
      <label>Celular</label>
    <input type="text" name="celular"><p>
      <label>Direccion</label>
    <input type="text" name="direccion"><p>
        <label>Usuario</label>
    <input type="text" name="usuario"><p>
      <label>Clave</label>
    <input type="text" name="clave"><p>
    
    

        <label>Elija el rol</label>
    

      <select name="roles">
      <option value="1">Administrador</option>
      <option value="2">Cliente</option>
      

    </select>
    <p>
      <button type="submit">Registrarse</button>
      

<!-- Bootstrap JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/validar.js"></script>​
</body>