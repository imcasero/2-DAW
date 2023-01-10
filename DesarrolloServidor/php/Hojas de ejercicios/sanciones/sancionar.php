<?php
    $alumno = $_POST['alum'];
    $sancion = $_POST['sancion'];
    $estado = $_POST['estado'];
    $sanc = $_POST['sanc'];

    insertar($alumno , $sancion , $sanc , $estado);

    function insertar($a , $s , $sc , $e){
        $fichero_cod = @fopen("alumnos_sancionados.txt", "r");
        $cadena = fseek($fichero_cod, -1, SEEK_END) ;
        $cod = explode(",", $cadena);
        $fichero_lec = @fopen("alumnos_sancionados.txt", "a");
        if (!$fichero_lec){
            die("Error en el fichero");
        }
        $hoy = new DateTime('now');
        
        $cadena = $cod[0]++ .',' . $a .',' .$s . ',' .$hoy->format("Y-m-d"). ',' .$sc . ',' . $e . "\n";
        fwrite($fichero_lec , $cadena);
    }
    
?>