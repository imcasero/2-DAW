let clickPass = document.getElementById("passInput");
let tabla_pass = document.getElementById("div-tabla");
const tabla = document.createElement("table");
//let div_asteriscos = document.getElementById("passInput");
let tabla_asteriscos = document.getElementById("tablaAst");
function validar() {
  let emailValue = document.getElementById("emailInput").value;
  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (emailRegex.test(emailValue)) {
    console.log("La dirección de email " + emailValue + " es correcta.");
    emailInput.classList.remove("error");
  } else {
    emailInput.classList.add("error");
    console.log("La dirección de email es incorrecta.");
    validacion = false;
  }
}
clickPass.addEventListener("click", tablaRandom);
function tablaRandom() {
  if (document.getElementById("tablaDatos") === null) {
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
    for (let index = 0; index < array.length; index++) {
      console.log("random en posicion " +index+" : " + array[index]);
    }

    tabla.setAttribute("id", "tablaDatos");
    let indice = 0;
    //seleccionar un padre (tabla_pass)
    //agregamos el nodo
    tabla_pass.appendChild(tabla);
    const tablaDatos = document.getElementById("tablaDatos");
    for (let i = 0; i < 2; i++) {
      var tr = document.createElement("tr");
      tablaDatos.appendChild(tr);
      for (let j = 0; j < 5; j++) {
        var td = document.createElement("td");
        tr.appendChild(td);
        td.textContent = array[indice];
        indice++;
      }
    }
    tablaAst();
  }
}
function tablaAst() {
  const url_img = "../media/img/icon/x-mark-24.png" ;

  let array = Array(6);
  //relleno el array
  for (let i = 0; i < array.length; i++) {
    array[i] = " ";
  }
  let cont = 0;
  while (cont < 3) {
    let num = Math.floor(Math.random() * (6 - 0));
    var existe = false;
    console.log("Contador: " + cont);
    if (array[num] === " ") {
      array[num] = "*";
      cont++;
    } else {
      existe = true;
    }
  }
  for (let i = 0; i < array.length; i++) {
    console.log("Array asterisco " + i + " : " + array[i]);
  }
  let td_asteriscos = tabla_asteriscos.getElementsByTagName('td');

  
  let long_asteriscos = td_asteriscos.length;

  for (let i = 0; i < long_asteriscos; i++) {
    if (array[i] === " ") {
      td_asteriscos[i].textContent = array[i];
    }else {
      td_asteriscos[i].innerHTML = url_img; //inserccion de imagen que no funciona
    }
    
  }
  
}
