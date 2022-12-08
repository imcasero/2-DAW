const lista = document.getElementById("lista");
let hijo;
let i = 0;
let j = 0;
lista.addEventListener("click", (e) => {
  let uls = document.createElement("ul");
  uls.setAttribute("id", `nodohijo${i}`);
  e.currentTarget.appendChild(uls);
  hijo = document.getElementById(`nodohijo${i}`);
  añadir(hijo);
});
function añadir() {
  if (!hijo) {
    let lis = document.createElement("li");
    i++;
    lis.textContent = `nodo0${i}`;
    lista.appendChild(lis);
  } else {
    let lis = document.createElement("li");
    i++;
    lis.textContent = `nodo0${j}${i}`;
    hijo.appendChild(lis);
  }
}
function borrar() {
  console.log("borrar");
}
