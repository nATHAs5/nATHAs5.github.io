<?php
require_once('../MODELO/conexion.php');
class Model{
private $db;
public function __Construct(){
$this->db = NEW conexion;
}
public function loguin($usu,$clave){
  try{
$sqlconsultar="SELECT * FROM usuario WHERE usua_usuario='$usu' AND usua_password ='$clave'";
$resultado = $this->db->conectar()->query($sqlconsultar)->fetch();
  session_start();
if ($resultado){
    $rol=$resultado['usua_rol'];
        $id_usu=$resultado['usua_codigo'];
        $_SESSION['usua_codigo']=$id_usu;
        $_SESSION['activo']=$usu;
        if ($rol==1){

          header('location: ../VISTA/administrador.php');

        }
        elseif ($rol==2) {
         
         
           header('location: ../VISTA/cliente.php');
        }
}else{
    echo "Datos incorrectos";
    session_destroy();

}
   }
    catch(PDOexception $men){
    var_dump($men->getMessage());
    }
   

}
public function mostrarCuenta($id){
    $sql="SELECT * FROM usuario WHERE usua_codigo='$id'";
    return $this->db->conectar()->query($sql)->fetchAll();
}
public function listar(){

    $sql="SELECT * FROM usuario";
    return $this->db->conectar()->query($sql)->fetchAll();

}
public function listarProd(){

    $sql="SELECT * FROM producto";
    return $this->db->conectar()->query($sql)->fetchAll();


}
public function eliminar($id){

  try{
 
    $hola = $this->db->conectar()-> prepare("CALL eliminar_usu(:id)");
    $hola->bindParam(":id",$id,PDO::PARAM_INT);
    $hola->execute();
  print_r('se eliminó el usuario correctamente');
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
}
}
public function ActualizarUsuario($identificacion,$tipo_identificacion,$nombre,$apellido,$celular,$direccion,$usuario,$clave,$codigo){

  try{
 
    $actualizar = $this->db->conectar()-> prepare("CALL actualizar_usu(:identificacion,:tipo_identificacion,:nombre,:apellido,:celular,:direccion,:usuario,:clave,:codigo)");
    $actualizar->bindParam(":identificacion",$identificacion,PDO::PARAM_STR);
    $actualizar->bindParam(":tipo_identificacion",$tipo_identificacion,PDO::PARAM_STR);
    $actualizar->bindParam(":nombre",$nombre,PDO::PARAM_STR);
    $actualizar->bindParam(":apellido",$apellido,PDO::PARAM_STR);
    $actualizar->bindParam(":celular",$celular,PDO::PARAM_STR);
    $actualizar->bindParam(":direccion",$direccion,PDO::PARAM_STR);
    $actualizar->bindParam(":usuario",$usuario,PDO::PARAM_STR);
$actualizar->bindParam(":clave",$clave,PDO::PARAM_STR);
$actualizar->bindParam(":codigo",$codigo,PDO::PARAM_INT);
    $actualizar->execute();
  print_r('se actualizo el usuario correctamente');
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
}
}
public function ActualizarProducto($codigo,$nombre,$precio,$stock,$medida,$foto,$descripcion){

  try{
 
    $actualizar = $this->db->conectar()-> prepare("CALL actualizar_usu(:codigo,:nombre,:precio,:stock,:medida,:foto,:descripcion");
    $actualizar->bindParam(":codigo",$codigo,PDO::PARAM_INT);
    $actualizar->bindParam(":nombre",$nombre,PDO::PARAM_STR);
    $actualizar->bindParam(":precio",$precio,PDO::PARAM_STR);
    $actualizar->bindParam(":stock",$stock,PDO::PARAM_STR);
    $actualizar->bindParam(":medida",$medida,PDO::PARAM_STR);
    $actualizar->bindParam(":foto",$foto,PDO::PARAM_STR);
    $actualizar->bindParam(":descripcion",$descripcion,PDO::PARAM_STR);
    $actualizar->execute();
  print_r('se actualizo el producto correctamente');
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
}
}
public function insertar ($identificacion,$tipo,$nombre,$apellido,$celular,$direccion,$usuario,$clave,$roles)
{
  try{
    $insertar = $this->db->conectar()-> prepare("CALL Agregar_usu(:identificacion,:tipo,:nombre,:apellido,:celular,:direccion,:usuario,:clave,:roles)");
    $insertar->bindParam(":identificacion",$identificacion,PDO::PARAM_STR);
     $insertar->bindParam(":tipo",$tipo,PDO::PARAM_STR); 
     $insertar->bindParam(":nombre",$nombre,PDO::PARAM_STR); 
     $insertar->bindParam(":apellido",$apellido,PDO::PARAM_STR); 
     $insertar->bindParam(":celular",$celular,PDO::PARAM_STR); 
     $insertar->bindParam(":direccion",$direccion,PDO::PARAM_STR);
       $insertar->bindParam(":usuario",$usuario,PDO::PARAM_STR);
      $insertar->bindParam(":clave",$clave,PDO::PARAM_STR); 
      $insertar->bindParam(":roles",$roles,PDO::PARAM_INT);

    $insertar->execute();
  print_r('se registraron los datos correctamente');
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
}
}
public function elimina($cod){

  try{
 
    $hi= $this->db->conectar()-> prepare("CALL eliminar_prod(:codigo)");
    $hi->bindParam(":codigo",$cod,PDO::PARAM_INT);
    $hi->execute();
  print_r('se eliminó el producto correctamente');
    }
    catch(PDOexception $men){
    var_dump($men->getMessage());
}
}
}
?>