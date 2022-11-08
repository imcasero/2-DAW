<?php
$inter = [];
$cadena_error = '<p style="color : red; font-size : 10px"> El texto a buscar es obligatorio </p>';
$formulario = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" enctype="multipart/form-data" method="post">
        <h3>ELEMENTO DE ENTRADA</h3>
        <h4>Elementos input</h4>
        <label for="inputText">Text</label></br>
        <input type="text" name="inputText"></br>
    </br>
        <label for="inputRadio">Radio</label></br>
        Sexo :
        <input type="radio" name="inputRadio" value="Hombre">hombre
        <input type="radio" name="inputRadio" value="Mujer">mujer
    </br></br>
        <label for="checkInput[]">Checkbox</label></br>
        Extras :
        <input type="checkbox" name="checkInput" value="garaje">garaje
        <input type="checkbox" name="checkInput" value="piscina">piscina
        <input type="checkbox" name="checkInput" value="ascensor">ascensor
    </br></br>
        <label for="fileInput">File</label></br>
        <input type="file" name="fileInput">
    </br></br>
        <label for="hiddenInput">Hidden</label></br>
        <input type="text" hidden>
    </br></br>
        <label for="passInput">Password</label></br>
        <input type="password" name="passInput" >
    </br></br>
    <h4>Elementos select</h4></br>
        <label for="colores[]">Select simple</label></br>
        <select name="colores[]">
            <option value="rojo">rojo</option>
            <option value="azul">azul</option>
            <option value="verde">verde</option>
            <option value="amarillo">amarillo</option>
        </select>
    </br></br>
        <label for="idiomas[]">Select multiple</label></br>
        <select name="idiomas[]" multiple>
            <option value="aleman">Aleman</option>
            <option value="ingles">Ingles</option>
            <option value="español">ESpañol</option>
            <option value="frances">Frances</option>
        </select>
    </br></br>
        <h4>Elemento textarea</h4>
        <label for="textareaInput">Textarea</label></br>
        <textarea name="textareaInput" cols="30" rows="10">
            texto en area
        </textarea>
    </br></br>
        <button type="submit">Enviar</button>
        '.$cadena_error.'
    </form>
    
</body>
</html>';
//VALIDACION INPUTTEXT
    if (empty($_POST['inputText'])) {
        array_push($inter , false);
    } else {
        $inputText = $_POST['inputText'];
        array_push( $inter , true);
    }
//VALIDACION RADIO
    if (empty($_POST['inputRadio'])) {
        array_push($inter , false);
    } else {
        $inputRadio = $_POST['inputRadio'];
        array_push( $inter , true);
    }
//VALIDACION CHECKINPUT
    if (empty($_POST['checkInput[]'])) {
        array_push($inter , false);
    } else {
        $checkInput = $_POST['checkInput[]'];
        array_push( $inter , true);
    }
//VALIDACION FILEINPUT
    if (empty($_POST['inputFile'])) {
        array_push($inter , false);
    } else {
        $inputFile = $_POST['inputFile'];
        array_push( $inter , true);
    }
//VALIDACION HiddenINPUT
    if (empty($_POST['HiddentFile'])) {
        array_push($inter , false);
    } else {
        $inputHidden = $_POST['inputHidden'];
        array_push( $inter , true);
    }
//VALIDACION passInput
    if (empty($_POST['passInput'])) {
        array_push($inter , false);
    } else {
        $passInput = $_POST['passInput'];
        array_push( $inter , true);
    }
//VALIDACION COLORES
    if (empty($_POST['colores[]'])) {
        array_push($inter , false);
    } else {
        $colores = $_POST['inputFile[]'];
        array_push( $inter , true);
    }
//VALIDACION IDIOMAS
    if (empty($_POST['idiomas[]'])) {
        array_push($inter , false);
    } else {
        $idiomas = $_POST['idiomas[]'];
        array_push( $inter , true);
    }




//COMPROBACION DE ERRORES
    if (in_array(false , $inter)) {
        echo $formulario;
    } else {
        echo 'Formulario enviado correctamente';
    }
?>