'use strict'
var alumno = {
nombre: "Rosa Santana", 
grado: 8,
grupo: "m",
registro: 15082398
}
console.log(alumno); 
console.log(alumno.nombre);

for (var i in alumno){

if(alumno.hasOwnProperty(i))
{ 
    console.log(alumno[i]);
}
}

var ind= Object.keys(alumno);
for (var i=0; i<ind.length; i++){ 
    console.log(alumno [ind[i]]) 
}