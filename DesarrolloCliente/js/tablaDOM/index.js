window.onload = init();


function init(){
    
    const TABLA_GENERAL = document.getElementById('tabla_general');
    //creo la tabla dentro del div
    
    
    for (let i = 0; i < 8; i++) {
        var fila = document.createElement('tr'); //Tienen que estar dentro del for, si no soloc reara uno
        TABLA_GENERAL.appendChild(fila);
        for (let j = 0; j < 10; j++) {
            var colum = document.createElement('td');
            fila.appendChild(colum);
        }
    }
}




