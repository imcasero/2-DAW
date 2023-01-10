<?php
    $con = new mysqli("localhost","root","root");
    $con->select_db("prueba_ajax");
    $strsql="SELECT * FROM nombres_edades";
    if ($resu=$con->query($strsql)){
    while($fila=$resu->fetch_row()){
    
    foreach($fila as $valor){
        echo $valor. ' ';
    }
    echo '<br>';
}
    $resu->close();
    $con->close();
    }
?>