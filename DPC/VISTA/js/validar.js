function validar(){
//definir variables
var correo;
var clave;
var mensajes;
var mensajes2;

correo = document.getElementById('usuario').value;
clave = document.getElementById('clave').value;
mensajes="No puede quedar ningun campo vacío";
mensajes2="La clave debe tener como mínimo 7 caracteres";

if(correo===""||clave===""){
	//alert ("El correo o la clave no pueden quedar Vacios");
	document.getElementById('mensaje').innerHTML=mensajes;
	return false;
}

if(clave.length<7){
	document.getElementById('mensaje').innerHTML=mensajes2;
	return false;
}

}