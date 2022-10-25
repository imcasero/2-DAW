let num = "";
let aux;
let i = 0;
do {
  aux = Math.floor(Math.random() * (9 - 1));
  console.log(aux);
  aux.toString(aux);
  num = num.concat("", aux);
  console.log(num);
  i++;
} while (i < 6);
