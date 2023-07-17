
'use strict'
function usuario (nombre, edad, sexo, ocupacion) { 
    console.log(nombre, edad, sexo, ocupacion);
}
usuario ("Ross", 30, "Femenino", "Docente");

function usuarios (...informacion) {
console.log(informacion);
}
var usuarioInfo=["Ross", 30, "Femenino", "Docente"];
usuarios (...usuarioInfo); 