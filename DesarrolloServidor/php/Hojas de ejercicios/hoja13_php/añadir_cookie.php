<?php

echo $_POST['nivel'];
    $cadena_error = 
    '<p style="color : red; font-size : 10px ">Todos los campos son obligatorios</p>';
    $errors = array();
    if (empty($_POST['nombre'])){
        array_push($errors , false);
    }
    if (empty($_POST['contenido'])){
        array_push($errors , false);
    }
    if (empty($_POST['nivel'])){
        array_push($errors , false);
        
    }
    
    if(in_array(false , $errors)){
        echo '
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>Cookies</title>
            </head>
            <body>
                <h3>Lista de cookies</h3>
                <form action="añadir_cookie.php" method="post">
                <label for="nombre">Nombre de la cookie</label>
                <input type="text" name="nombre" >

                <label for="contenido">Introduzca el contenido de la cookie</label>
                <input type="text" name="contenido"></br></br>
                <label for="nivel">Nivel donde crear</label>
                <select name="nivel">
                    <option value="nivel0">Nivel 0</option>
                    <option value="nivel1">Nivel 1</option>
                    <option value="nivel2">Nivel 2</option>
                </select></br>
                '.$cadena_error.'

                <button type="submit">Crear cookie</button>
                </form>
                <h3>Listar cookies</h3>
                <p>Nivel 0 --> <a href="./nivel0.php">Nivel 0</a></p> 
                <p>Nivel 0 --> Nivel 1 --> <a href="./nivel1/nivel1.php">Nivel 1</a></p> 
                <p>Nivel 0 --> Nivel 1 --> Nivel 2 --> <a href="./nivel1/nivel2/nivel2.php">Nivel 2</a></p> 
            </body>
        </html>';
    } else {
        $nombre = $_POST['nombre'];
        $contenido = $_POST['contenido'];
        $nivel = $_POST['nivel']; // 1, 2 ,3

        insertar($nombre , $contenido , $nivel);

        
    }
    function insertar($nomb , $cont){
        switch ($_POST['nivel']) {
            case 'nivel0':
                $cad = '/hoja13_php/'.$_POST['nivel'];
                break;
            
            case 'nivel1':
                $cad = 'hoja13_php/nivel1/'.$_POST['nivel'];
                break;
            case 'nivel2':
                $cad = 'hoja13_php/nivel1/nivel2/'.$_POST['nivel'];
                break;
        }
        $segura = false;
        setcookie($nomb , $cont , time()+60*60 , $cad , $segura);
    }
    
?>