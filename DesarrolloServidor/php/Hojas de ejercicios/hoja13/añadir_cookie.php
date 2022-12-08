<?php
    $cadena_error = 
    '<p style="color : red; font-size : 10px > 
        Este campo es obligatorio o incorrecto
    </p>';
    $errors = array();
    if (empty($_POST['name'])){
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
                    <option value="0">Nivel 0</option>
                    <option value="1">Nivel 1</option>
                    <option value="2">Nivel 2</option>
                </select></br>

                '.$cadena_error.'</br>

                <button type="submit">Crear cookie</button>
                </form>
                <h3>Listar cookies</h3>
                <p>Nivel 0 --> <a href="nivel0.php">Nivel 0</a></p> 
                <p>Nivel 0 --> Nivel 1 --> <a href="nivel1.php">Nivel 1</a></p> 
                <p>Nivel 0 --> Nivel 1 --> Nivel 2 --> <a href="nivel2.php">Nivel 3</a></p> 
            </body>
        </html>';
    } else {

    }
    
?>