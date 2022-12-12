window.onload = cargando();

function cargando() {
    alert("Cargando");

    peticion_http_prueba = new XMLHttpRequest();
    peticion_http_prueba.onreadystatechange = procesaRespuesta;
    peticion_http_prueba.open("POST", "./recibir_peticion.php", true);
    peticion_http_prueba.setRequestHeader(
        "Content-Type",
        "application/x-www-form-urlencoded"
      );
      peticion_http_prueba.send();
}

function procesaRespuesta() {
    console.log("readyState " + peticion_http_prueba.readyState);
    console.log("status " + peticion_http_prueba.status);
  
    if (peticion_http_prueba.readyState == 4) {
      if (peticion_http_prueba.status == 200) {
        var respuesta = peticion_http_prueba.responseText;
        document.getElementById("tabla").innerHTML = respuesta;
        
      }
    }
  }