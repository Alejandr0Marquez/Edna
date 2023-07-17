'use strict'

//funciones dentro de otras funciones que pueden ser tomadas como parametro o
 //como retorno

//Ejemplo

function usuario(){
console.log("Funcion ejecutada");
}
 function informacion (estado, usuario){
    if (!estado) {
        usuario();
        }

}

informacion (false, usuario);

//Ejemplo 2

function info (texto){
    function user (){
        console.log("funcion ejecutada"+texto);
    }
    return user();
}
 info ("hola ya quedo");