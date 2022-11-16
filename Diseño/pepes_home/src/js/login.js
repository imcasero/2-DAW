let clickPass = document.getElementById("passInput");
let tabla_pass = document.getElementById("div-tabla");
const tabla = document.createElement("table");
const url_imgx = "../../media/img/icon/x-mark-24.png";
const url_imgb = "../../media/img/icon/check-mark-3-24.png";
const url_imgo = "../../media/img/icon/circle-outline-32.png";
var contclick = 0;
var teclado;
var pass_global = new Array();
var possicion_ast = new Array();
var cadena_error = 'Este campo es obligatorio';
//let div_asteriscos = document.getElementById("passInput");
let tabla_asteriscos = document.getElementById("tablaAst");
function validar() {
  let validacion = false;
  console.log("=======================Validacion=====================");
  let emailValue = document.getElementById("emailInput").value;
  emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (emailRegex.test(emailValue)) {
    console.log("La dirección de email " + emailValue + " es correcta.");
    emailInput.classList.remove("error");
    validacion = true;
  } else {
    emailInput.classList.add("error");
    console.log("La dirección de email es incorrecta.");
    validacion = false;
  }
  if (validacion) {
    let boton = document.getElementById("submit");
    boton.removeAttribute("hidden");
  } else {
    let div_validacion = document.getElementById("validacion");
    div_validacion.appendChild(p);
    p.classList.add("error");
    p.textContent = cadena_error;
  }
}
clickPass.addEventListener("click", tablaRandom);
function tablaRandom() {
  console.log("=======================tabla=====================");
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
      console.log("random en posicion " + index + " : " + array[index]);
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
    tablaAst(array);
  }
}
function tablaAst(password) {
  console.log("=======================Astericos=====================");
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
      possicion_ast.push(num);
      cont++;
    } else {
      existe = true;
    }
  }
  for (let i = 0; i < array.length; i++) {
    console.log("Array asterisco " + i + " : " + array[i]);
  }
  let td_asteriscos = tabla_asteriscos.getElementsByTagName("td");
  let long_asteriscos = td_asteriscos.length;
  for (let i = 0; i < long_asteriscos; i++) {
    if (array[i] === " ") {
      td_asteriscos[i].innerHTML = '<img src="' + url_imgo + '"> </img>';
    } else {
      td_asteriscos[i].innerHTML = '<img src="' + url_imgx + '"> </img>';
    }
  }
  clickPass.removeEventListener("click", tablaRandom);
  recogerTeclado(password);
}
function recogerTeclado(password) {
  console.log("=======================Contraseña=====================");
    teclado = document.getElementById("tablaDatos");
    

  teclado.addEventListener("click", (e) => {
    if (contclick < 3){
      if ((e.target.nodeName = "TD")) {
        console.log( "Contador " + contclick);
        contclick++;
        let celda = e.target;
        let col = parseInt(celda.cellIndex);
        let fil = parseInt(celda.parentNode.rowIndex);
        
        if (fil > 0) {
          // console.log("La celda es: " + col, fil);
          console.log("Valor de la contrasña " + password[5 + col]);
          pass_global.push(password[5 + col].toString());
          if (pass_global.length < 3) {
            
          }else {
            insertarHidden();
            clickPass.removeEventListener("click", tablaRandom);
          }
          
        } else {
          // console.log("La celda es: " + col, fil);
          console.log("Valor de la contrasña " + password[col]);
          pass_global.push(password[col].toString());
          if (pass_global.length < 3) {
           
          }else {
            insertarHidden();
            clickPass.removeEventListener("click", tablaRandom);
          }
          
        }
      }
    }
  });
 
 
  //LE PASO A LA FUNCION LOS DOS ARGUMENTOS QUE UTILIZARE PARA CMABIAR EL VALOR DE LOS HIDDEN
}

function insertarHidden() {
  console.log("=======================Hidden=====================");
  possicion_ast.sort(function(a, b) {
    return a - b;
  });
  console.log("Entra en funcion insertarHidden");
  //FOR PARA DEBUG
  for (let i = 0; i < possicion_ast.length; i++) {
    console.log("La posicion del asterisco " + i +" es " + possicion_ast[i]);
  }
  for (let i = 0; i < pass_global.length; i++) {
    console.log("El digito " + i + " es " + pass_global[i]);
  }
  let ast_string = possicion_ast.toString();
  let pass_string = pass_global.toString()
  console.log('asteriscos ' + ast_string + ' pass ' + pass_string);
  let hiddenPass = document.getElementById("hiddenPass");
  let hiddenAst = document.getElementById("hiddenAst");

  hiddenPass.value = pass_string;
  hiddenAst.value = ast_string;

  console.log("El valor de la contraseña es " + hiddenPass.value);
  console.log("El valor de la posicion es " + hiddenAst.value);
}
function borrar() {}
