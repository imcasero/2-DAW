//VALIDACION DE FORMULARIO
let validacion = true;
function recogerDatos() {
  console.log("------------------RECOGIDA DE DATOS------------------");
  let email = document.getElementById("emailInput").value;
  console.log("el email es: " + email);
  let emailInput = document.getElementById("emailInput");
  let pass = document.getElementById("passInput").value;
  let passInput = document.getElementById("passInput");
  console.log("la contraseña es: " + pass);
  let name = document.getElementById("nameInput").value;
  let nameInput = document.getElementById("nameInput");
  console.log("el nombre es: " + name);
  let surname = document.getElementById("surnameInput").value;
  let surnameInput = document.getElementById("surnameInput");
  console.log("el apellido es: " + surname);
  let address = document.getElementById("addressInput").value;
  let addressInput = document.getElementById("addressInput");
  console.log("el address es: " + address);
  let date = document.getElementById("datepicker").value;
  let dateInput = document.getElementById("datepicker");
  console.log("el date es: " + date);
  let dni = document.getElementById("dniInput").value;
  let dniInput = document.getElementById("dniInput");
  console.log("el DNI es: " + dni);
  let tel = document.getElementById("telInput").value;
  let telInput = document.getElementById("telInput");
  console.log("el DNI es: " + dni);
  let check = document.getElementById("checkTerms").checked;
  let checkInput = document.getElementById("checkTerms");
  let divTerms = document.getElementById("div-terms");
  console.log("El check es: " + check);

  console.log("El div es :" + divTerms);
  console.log("------------------VALIDACION------------------");
  validarEmail(email);
  validarContrasena(pass);
  validarName(name);
  validarSurname(surname);
  validarAddress(address);
  validarCheck(check ,divTerms);
  validarTel(tel);
  validarFin(validacion);
}
function validarEmail(emailValue) {
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
function validarContrasena(passwordValue) {
  // alert(passwordValue);
  if (!isNaN(passwordValue)) {
    passwordValue = passwordValue.toString();
    let passwordString = passwordValue.length;
    console.log(passwordString + " longitud");
    if (passwordString == 6) {
      console.log(passwordValue + " Contraseña valida");
      passInput.classList.remove("error");
    } else {
      console.log("Contraseña no valida");
      validacion = false;
      passInput.classList.add("error");
    }
  } else {
    console.log("Contraseña no valida por numero");
    passInput.classList.add("error");
    validacion = false;
  }
}
function validarName(nameValue) {
  if (isNaN(nameValue) && nameValue.length < 25) {
    console.log("Nombre valido");
    nameInput.classList.remove("error");
  } else {
    console.log("Nombre no valido");
    nameInput.classList.add("error");
    validacion = false;
  }
}
function validarSurname(surnameValue) {
  if (isNaN(surnameValue) && surnameValue.length < 25) {
    console.log("Apellido valido");
    surnameInput.classList.remove("error");
  } else {
    console.log("Apellido no valido");
    surnameInput.classList.add("error");
    validacion = false;
  }
}
function validarAddress(address) {
  if (isNaN(address)) {
    console.log("Direccion valida");
    addressInput.classList.remove("error");
  } else {
    console.log("Direccion no valida");
    addressInput.classList.add("error");
    validacion = false;
  }
}
function validarTel(tel) {
  let telString = tel.toString();
  let long = telString.length;
  if (!isNaN(tel) && long < 10) {
    console.log("telefono valido");
    telInput.classList.remove("error");
  } else {
    console.log("telefono no valida");
    telInput.classList.add("error");
    validacion = false;
  }
}
function validarCheck(check ,divTerms) {
  if (check) {
    console.log("Los terminos han sido aceptados");
    divTerms.classList.remove("error");
  } else {
    console.log("Los terminos no han sido aceptados");
    divTerms.classList.add("error");
    validacion = false;
  }
}
function validarFin(validacion) {
  if (validacion == false) {
    console.log("No se ha validado");
    alert("ERROR EN LOS DATOS");
  } else {
    console.log("validacion completada");
    document.classList.remove("error");
  }
}
