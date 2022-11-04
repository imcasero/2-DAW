let clickPass = document.getElementById("passInput");

clickPass.addEventListener("click", tablaRandom);
function tablaRandom() {
  var array = [];
  while (array.length < 10) {
    var numeroAleatorio = Math.floor(Math.random() * (10 - 0));
    var existe = false;
    for (var i = 0; i < array.length; i++) {
      if (array[i] == numeroAleatorio) {
        existe = true;
        break;
      }
    }
    if (!existe) {
      array[array.length] = numeroAleatorio;
    }
  }
  // for (let index = 0; index < array.length; index++) {
  //   console.log(array[index]);
  // }
  array.forEach(element => {
    document.write('<table>');
    document.write('<tr>');
    let num = element;
    for (let i = 0; i < array.length / 2; i++) {
      document.write('<td>' + num + '</td>');
    }
    document.write('</tr>');
    document.write('</table>');
  });
}
