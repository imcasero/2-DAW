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
let tabla = getElementById("tabla");
//Creo una funcion de click respecto a la tabla
tabla.addEventListener("click", pintar());

function pintar(){
  console.log("Click");
}