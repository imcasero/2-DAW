//Creo la tabla 10x10
document.write('<table border=1 cellspacing=0 id="tabla">');
for (let i = 0; i < 10; i++) {
  document.write("<tr>");
  for (let j = 0; j < 10; j++) {
    document.write("<td></td>");
  }
  document.write("</tr>");
}
document.write("</table>");
//Almaceno la tabla en una variable
let tabla = document.getElementById("tabla");
let td = tabla.getElementsByTagName("td");
//Creo una funcion de click respecto a la tabla
td.addEventListener("click" , pintar());
function pintar(){
  td.classList.add("click1");
}