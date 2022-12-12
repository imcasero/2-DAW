<?php

    $GLOBALS['DB_IP'] = '127.0.0.1';
    $GLOBALS['DB_USER'] = 'root';
    $GLOBALS['DB_PASS'] = 'root';
    $GLOBALS['DB_NAME'] = 'prueba_ajax';

    // se establece el conector
    $db = mysqli_connect($GLOBALS['DB_IP'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASS']);

    if(!$db){
        die('No se establece conexion');
    }
    $db->select_db($GLOBALS['DB_NAME']);

    
?>