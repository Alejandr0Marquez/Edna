'use strict'

document.writeln("hola mundo");

var parra = document.getElementById("parrafo");
var par = document.getElementsByClassName("noso");

var pa = document.querySelector(".noso");



parra.style.fontFamily = "'Courier New', Courier, monospace";
parra.style.background = "black";

function cambio(){
    let parrafo1 = document.getElementById("1");
    parrafo1.style.fontFamily = "Arial, Helvetica, sans-serif";
    let parrafo2 = document.getElementById("2");
    parrafo2.style.background = "green";
}

pa.style.color = "red";

console.log(pa);
console.log(parra);