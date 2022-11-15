<?php
$nombre;
$destino;
$duracion;
$salida;
$cadena_error = 
'<p style="color : red; font-size : 20px ;text-align:center"> 
   Todos los campos son obligarotios 
</p>';

$inter = array();

    if (empty($_POST['nombre'])) {
        $inter['nombre'] = false;
    }else {
        $inter['nombre'] = true;
        $nombre = $_POST['nombre'];
    }
    if (empty($_POST['destino'])) {
        $inter['destino'] = false;
    }else {
        $inter['destino'] = true;
        $destino = $_POST['destino'];
    }
    if (empty($_POST['duracion'])) {
        $inter['duracion'] = false;
    }else {
        $inter['duracion'] = true;
        $duracion = $_POST['duracion'];
    }
    if (empty($_POST['salida'])) {
        $inter['salida'] = false;
    }else {
        $inter['salida'] = true;
        $salida = $_POST['salida'];
    }

    if (in_array(false , $inter)) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <form action="validacion.php" enctype="multipart/form-data" method="post">

                <table border="1" cellspacing="0">
                    <tr>
                        <td><label for="nombre">Introduzca el nombre del circuito</label></td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td><label for="destino">Introduzca el destino</label></td>
                        <td><input type="text" name="destino"></td>
                    </tr>
                    <tr>
                        <td><label for="duracion">Introduzca la duracion</label></td>
                        <td><input type="text" name="duracion"></td>
                    </tr>
                    <tr>
                        <td><label for="salida">Introduzca los dias de salida</label></td>
                        <td><input type="text" name="salida"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button type="submit">Enviar</button></td>
                    </tr>
                </table>
                '.$cadena_error.'
            </form>
            
        </body>
        </html>
        ';
    }else{
        $existe;
        $fichero_lec = @fopen('index.txt' , 'r');
        
        while (!feof($fichero_lec)) {
            $lec = fgets($fichero);
            if (strpos($lec , $destino)) {
                echo 'el destino introducio existe';
            }
        }

        $cadena = "$nombre:$destino:$duracion:$salida";
    }
?>