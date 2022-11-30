window.onload = init();

function init() {
  const TABLA_GENERAL = document.getElementById("tabla_general");
  //creo la tabla dentro del div
  for (let i = 0; i < 8; i++) {
    var fila = document.createElement("tr"); //Tienen que estar dentro del for, si no solo creara uno
    TABLA_GENERAL.appendChild(fila);
    for (let j = 0; j < 10; j++) {
      var colum = document.createElement("td");//creo td
      var rad = document.createElement("INPUT");
      rad.setAttribute("type", "radio");//input radio
      var sub = document.createElement("INPUT");
      sub.setAttribute("type", "submit");//input submit
      var check = document.createElement("INPUT");
      check.setAttribute("type", "checkbox");//input checkbox
      var elementos = new Array(" ", rad, sub, check); //array de elementos
      fila.appendChild(colum);//columna hija de fila
      colum.appendChild(
        elementos[Math.floor(Math.random() * elementos.length)] //elementos hijos de colum
      );
    }
  }
}
