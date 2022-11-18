<?php
    $fichero = @fopen("fincidencias.txt", "r+");
    if (!$fichero) {
        die('Fichero inaccesible');
    }
    $array_aux = array();
    while (!feof($fichero)) {
        $fila = fgets($fichero);
        array_push($array_aux , $fila);
    }
    $array = array();
    foreach ($array_aux as $key ) {
        $a = explode("$" , $key); 
        array_push($array , $a);
    }
    //print_r($array);
    $cat = $_POST['cat'];
    //pinto tabla
    echo '<table border="1" cellspacing="0" style="margin-top : 20px">';
    foreach ($array as $clave => $array_fila) {
        echo '<tr>';
        if (in_array($array_fila[1] , 'Parques infantiles')  || in_array($array_fila[1] , 'Iluminacion') || in_array($array_fila[1] , 'Calzad') || in_array($array_fila[1] , 'Jardines') ) {
        foreach ($array_fila as $valor) {
           
                echo '<td>'.$valor.'</td>';
            }
            echo '<td>'.$valor.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>