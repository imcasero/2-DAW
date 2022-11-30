<?php
    
    $fichero_vehiculos = @fopen("../txt/vehiculos.txt" , "r"); //fichero general
    comp($fichero_vehiculos);
    $logistica = @fopen("../txt/logistica.txt" , "r");
    comp($logistica);
    $residentes = @fopen("../txt/residentesYHoteles.txt" , "r");
    comp($residentes);
    $servicios = @fopen("../txt/servicios.txt" , "r");
    comp($servicios);
    $taxis = @fopen("../txt/taxis.txt" , "r");
    comp($taxis);
    $vehiculosEMT =  @fopen("../txt/vehiculosEMT.txt" , "r");
    comp($taxis);

    
    $array_vehiculos = lec($fichero_vehiculos);
    fclose($fichero_vehiculos);
    $array_logistica = lec($logistica);
    fclose($logistica);
    $array_residentes = lec($residentes);
    fclose($residentes);
    $array_servicios = lec($servicios);
    fclose($servicios);
    $array_taxis = lec($taxis);
    fclose($taxis);
    $array_vehiculosEMT = lec($vehiculosEMT);
    fclose($vehiculosEMT);

    $resul = array();
    array_push($resul , comp_array($array_vehiculos , $array_logistica));
    array_push($resul, comp_array($array_vehiculos, $array_residentes));
    array_push($resul, comp_array($array_vehiculos, $array_servicios));
    array_push($resul, comp_array($array_vehiculos, $array_taxis));
    array_push($resul, comp_array($array_vehiculos, $array_vehiculosEMT));


    imp_tabla($resul);

    function lec($fichero){
        $array_datos = array();
        while (!feof($fichero)) {
            $fila = fgets($fichero);
            $a = explode(' ' , $fila); 
            array_push($array_datos , $a);
        }
        return $array_datos;
    };
    function comp_array($array1 , $array2){
        
        foreach ($array1 as $key => $array_fila_g) {
            $array_datos = array();
            foreach ($array2 as $key => $array_fila_2) {
                if ($array_fila_g[5] == 'electrico') {
                    
                }else {
                    if ($array_fila_g[0] == $array_fila_2[0]){
                        array_push($array_datos , $array_fila_g);
                    }
                }
                
            }
        }
        return $array_datos;
    }
    function comp($fic){ //Funcion para comprobar acceso a ficheros
        if (!$fic)
            die("Fichero inaccesible");
    }
    function imp_tabla($resul){
        echo '<table border="1">';
        foreach ($resul as $key => $fila) {
            echo '<tr>';
            foreach ($fila as $key => $valor) {
                foreach ($valor as $key) {
                    echo '<td>'. $key .'</td>';
                }
                
            }
            echo '</tr>';
        }
        echo '</table>';
    }
?>