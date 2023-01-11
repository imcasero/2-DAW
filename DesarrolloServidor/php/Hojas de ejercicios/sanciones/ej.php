<?php
    $alumno = $_POST['alum'];
    $fichero = @fopen('alumnos_sancionados.txt' ,  'r');
    if (!$fichero){
        die("Error en el fichero");
    }
    echo '<h1>Faltas de : '.$alumno.'</h1>';
    echo '<table>';
    while(!feof($fichero)){
        $fila = explode("," , fgets($fichero));
        echo $fila[1] . '<br>';
        if ($alumno == $fila[1]){
            echo '<tr>';
            foreach ($fila as $key => $value) {
                
                if ($value == 'EP' || $value == 'P'){
                    if($value == 'Ep'){
                        echo '<td><button>Finalizar</button></td>'; 
                    } else {
                        echo '<td><button>Finalizar</button></td>';
                    }
                }else {
                    echo '<td>'.$value.'</td>';   
                }
            }
            echo '</tr>';
        }            
    }
    echo '<table>';
?>