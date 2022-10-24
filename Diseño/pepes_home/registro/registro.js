//addEventlistener(click , e);

function recogerDatos() {
  
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
  let date = document.getElementById("datepicker").value;//why null
  console.log("el date es: " +date);
  let dni = document.getElementById("dniInput").value;
  console.log("el DNI es: " +dni);
  let check = document.getElementById("checkTerms").value;
  console.log("El check es: " +check);

  validarEmail(email);
  validarContrasena(pass);
  validarName(name);
  validarSurname(surname);
}



function validarEmail(emailValue) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(emailValue)) {
    console.log("La dirección de email " + emailValue + " es correcta.");
  } else {
    console.log("La dirección de email es incorrecta.");
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
    }
  } else {
    console.log("Contraseña no valida por numero");
  }
}
function validarName(nameValue) {
  if (!isNaN(nameValue) && nameValue.length > 25) {
    console.log("Nombre valido");
  } else {
    console.log("Nombre no valido");
  }
}
function validarSurname(surnameValue) {
  if (!isNaN(surnameValue) && surnameValue.length > 25) {
    console.log("Apellido valido");
  } else {
    console.log("Apellido no valido");
  }
}

