function validar(){​

//definir variables​

var usuario;​

var clave;​

var mensajes;​

var mensajes2;​

​

usuario = document.getElementById('usuario').value;​

clave = document.getElementById('clave').value;​

mensajes"No puede quedar ningun campo vacio";​

mensajes2="La clave debe tener como mínimo 7 caracteres";​

​

if(usuario===""||clave===""){​

//alert ("El correo o la clave no pueden quedar Vacios");​

document.getElementById('mensaje').innerHTML=mensajes;​

return false;​

}​

​

if(clave.length<7){​

document.getElementById('mensaje').innerHTML=mensajes2;​

return false;​

}​

​

}​