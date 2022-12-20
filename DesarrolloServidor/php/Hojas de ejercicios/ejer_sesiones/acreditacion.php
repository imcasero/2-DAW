<?php
    // $pass = 'root';
    // $user = 'root';
    session_start();
    if (!isset($_SESSION['aut'])){
        if(!empty($_POST['nam']) && !empty($_POST['pass'])){
            if ($_POST['pass'] == 'diego' && $_POST['nam'] == 'diego'){
                $_SESSION['aut'] = true;
                $_SESSION['user'] = 'diego';
            } else {
                header("Location : index.php");
            }
        }else {
            header("Location : index.php");
        }
    } else {
        header("Location: informacion.php");
    }

    
?>