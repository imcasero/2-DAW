//addEventlistener(click , e);

function recogerDatos() {
  let validacion = true ;
  let email = document.getElementById("emailInput").value;
  console.log("el email es: " +email);
  let pass = document.getElementById("passInput").value;
  console.log("la contraseña es: " +pass);
  let name = document.getElementById("nameInput").value;
  console.log("el nombre es: " +name);
  let surname = document.getElementById("surnameInput").value;
  console.log("el apellido es: " +surname);
  let address = document.getElementById("addressInput").value;
  console.log("el address es: " +address);
  let date = document.getElementById("datepicker").value;
  console.log("el date es: " +date);
  let dni = document.getElementById("dniInput").value;
  console.log("el DNI es: " +dni);
  let check = document.getElementById("checkTerms").value;
  console.log("El check es: " +check);

  validarEmail(email);
  validarContrasena(pass);
  validarName(name);
  validarSurname(surname);
  validarAddress(address);
  validarCheck(check);
  validarFin(validacion);
}



function validarEmail(emailValue) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(emailValue)) {
    console.log("La dirección de email " + emailValue + " es correcta.");
  } else {
    console.log("La dirección de email es incorrecta.");
    validacion = false;
  }
}
function validarContrasena(passwordValue) {
  // alert(passwordValue);
  if (!isNaN(passwordValue)) {
    passwordValue = passwordValue.toString();
    let passwordString = passwordValue.length;
    console.log(passwordString + " longitud");
    if (passwordString == 6) {
      console.log(passwordValue + " Contraseña valida");
    } else {
      console.log("Contraseña no valida");
      validacion = false;
    }
  } else {
    console.log("Contraseña no valida por numero");
    validacion = false;
  }
}
function validarName(nameValue) {
  if (!isNaN(nameValue) && nameValue.length > 25) {
    console.log("Nombre valido");
  } else {
    console.log("Nombre no valido");
    validacion = false;
  }
}
function validarSurname(surnameValue) {
  if (!isNaN(surnameValue) && surnameValue.length > 25) {
    console.log("Apellido valido");
  } else {
    console.log("Apellido no valido");
    validacion = false;
  }
}
function validarAddress(address) {
  if (isNaN(address)) {
    console.log("Direccion valida");
  } else {
    console.log("Direccion no valida");
    validacion = false;
  }
}
function validarCheck(check) {
  if(check == true){
    console.log("Los terminos han sido aceptados");
  } else {
    console.log("Los terminos no han sido aceptados");
    validacion = false;
  }
}
function validarFin(validacion) {
  if (validacion == false) {
    console.log("No se ha validado");
    alert("ERROR EN LOS DATOS");
  } else {
    console.log("validacion completada")
  }
}