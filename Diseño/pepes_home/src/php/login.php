<?php
    $email = $_POST['emailInput'];
    $contraseña = $_POST['hiddenPass'];
    $pos_asteriscos = $_POST['hiddenAst'];
    $pos_pass = $_POST['hiddenPos'];
    $contraseña = explode(',',  $contraseña);
    $pos_asteriscos = explode(',',  $pos_asteriscos);
    $pos_pass= trim($pos_pass);
    $pos_pass= explode(' ', $pos_pass);

    $cadena_comp = array(6);

    for ($i = 0 ; $i < count($contraseña) ; $i++){
        $cadena_comp[$pos_pass[$i]] = $contraseña[$i];
    };
    for ($i = 0 ; $i < count($contraseña) ; $i++){
        $cadena_comp[$pos_asteriscos[$i]] = '*';
    };
    ksort( $cadena_comp);
    // foreach($cadena_comp as $key => $value){
    //     echo $key . ' ' . $value . ' <br>';
    // }
?>