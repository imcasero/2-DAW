window.onload = init();

function init() {
  const TABLA_GENERAL = document.getElementById("tabla_general");
  //creo la tabla dentro del div
  for (let i = 0; i < 8; i++) {
    var fila = document.createElement("tr"); //Tienen que estar dentro del for, si no solo creara uno
    TABLA_GENERAL.appendChild(fila);
    for (let j = 0; j < 10; j++) {
      var colum = document.createElement("td"); //creo td
      fila.appendChild(colum); //columna hija de fila
    }
  }
}
