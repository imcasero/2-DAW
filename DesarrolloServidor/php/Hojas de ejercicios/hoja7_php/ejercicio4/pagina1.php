<?php
$inter = array();
$cadena_error = '<p style="color : red; font-size : 10px"> Este campo es obligatorio </p>';
if (empty($_POST['inputText'])) {
    $inter['inputText'] = false;
} else {
    
    $inter['inputText'] = true;
}
if (empty($_POST['inputText'])) {
    $inter['inputArea'] = false;
} else {
    
    $inter['inputArea'] = true;
}
if (in_array( false , $inter)) {
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <form action="pagina1.php" enctype="multipart/form-data" method="post">
            <label for="inputText"><b>Introduzca su nombre :</b></label><br>
            <input type="text" name="inputText">
            <br><br>
            <label for="inputArea"><b>Comentarios sobre esta pagina web :</b></label><br>
            <textarea name="inputArea" cols="30" rows="10"></textarea><br><br>
            '.$cadena_error.' <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
    </html>';
}else {
    global $text;
    global $area;
    $text = strval($inter['inputText']);
    $area = strval($inter['inputArea']);
    include('pagina2.php');
}
?>