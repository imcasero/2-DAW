let cont_list = document.getElementById("cont_list");
let lista = document.getElementById("lista");
let target_evento;
let cont_g = 0;
let cont_h = 0;
lista.addEventListener("click", (e) => {
  if (target_evento !== e.target) {
    cont_h = 0;
  }
  target_evento = e.target;
});

function añadir() {
  if (target_evento !== undefined) {
    let ul_child = document.createElement("ul");
    target_evento.appendChild(ul_child);
    let li_hijo = document.createElement("li");
    cont_h++;

    let cont_padre = ul_child.parentElement.textContent;
    console.log(cont_padre);
    li_hijo.textContent = cont_h;
    ul_child.appendChild(li_hijo);
  } else {
    let li = document.createElement("li");
    cont_g++;
    let cad = `nodo0${cont_g}`;
    li.textContent = cad;
    lista.appendChild(li);
  }
}
