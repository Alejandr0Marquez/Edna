/*'use strict'

//Document Object Modal

document .writeln("Hola mundo");

var parra = document.getElementById("parrafo");
var par = document.getElementsByClassName("noso");

var pa = document.querySelector(".noso");
parra.style.color = "white";
parra.style.background = "black";

//par 8] .style.color = "red";

pa.style.color = "pink";

console. log (pa);
console. log(parra);

*/

'use strict'

window.addEventListener('DOMContentLoaded', function() {
   var parra = document.getElementById("parrafo");
   var par = document.getElementsByClassName("noso");
   var pa = document.querySelector(".noso");

   parra.style.color = "white";
   parra.style.background = "black";
   pa.style.color = "pink";

   console.log(pa);
   console.log(parra);
});