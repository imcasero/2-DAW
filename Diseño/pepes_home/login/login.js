let clickPass = document.getElementById("passInput");
let tabla_pass = document.getElementById("div-tabla");
const tabla = document.createElement('table');
const tr = document.createElement('tr');
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
    console.log(array[index]);
  }
  
  tabla.setAttribute("id" , "tablaDatos");
  
  //seleccionar un padre (tabla_pass)
  //agregamos el nodo
  tabla_pass.appendChild(tabla);
  const tablaDatos = document.getElementById("tablaDatos");
  for (let i = 0; i < 2; i++) {//porque me crea un solo td???
    tablaDatos.appendChild(tr);
    
  }
}

