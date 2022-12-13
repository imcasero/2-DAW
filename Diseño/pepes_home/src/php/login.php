<?php
    $inter = true;
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
    $GLOBALS['DB_IP'] = '127.0.0.1';
    $GLOBALS['DB_USER'] = 'root';
    $GLOBALS['DB_PASS'] = 'root';
    $GLOBALS['DB_NAME'] = 'pepes_home';

    $db = mysqli_connect($GLOBALS['DB_IP'] , $GLOBALS['DB_USER'] , $GLOBALS['DB_PASS']);
    if (!$db){
        die('No se puedo conectar con la BD' );
    }

    mysqli_select_db($db ,  $GLOBALS['DB_NAME']);
    $const_email = "SELECT email FROM clientes WHERE email LIKE '$email'";
    $result_email = mysqli_query($db , $const_email);

    if(!$result_email){
        die('El email no existe' );
    }

    $const_cont = "SELECT contraseña FROM clientes WHERE email LIKE '$email'";
    $result_cont =mysqli_query($db , $const_cont);

    if(!$result_cont){
        die('El email no existe' );
    }
    $email_db;
    $pass_db;
    while ($valor = mysqli_fetch_array($result_email)){
        foreach ($valor as $key => $value) {
            $email_db= $value;
        }
    }
    while ($valor = mysqli_fetch_array($result_cont)){
        foreach ($valor as $key => $value) {
            $pass_db= $value;
        }
    }
    $array_pass_db = str_split($pass_db );
    

    for ($i=0; $i < count($contraseña); $i++) { 
        if ($array_pass_db[$pos_pass[$i]] !==  $contraseña[$i]) {
            $inter = false;
            break;
        }
    }
    
    if ($inter) {
        header('Location: ../../index.html');
    } else {
        header('Location: ../html/error_login.html');
    }

?>