<?php
$inter = array();
$cadena_error = '<p style="color : red; font-size : 10px"> Este campo es obligatorio </p>';
$formulario = '
<!DOCTYPE html>
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
        <input type="text" name="inputText"> </br>
    </br>
        <label for="inputRadio">Radio</label></br>
        Sexo :
        <input type="radio" name="inputRadio" value="Hombre">hombre
        <input type="radio" name="inputRadio" value="Mujer">mujer
    </br></br>
        <label for="inputCheck[]">Checkbox</label></br>
        Extras :
        <input type="checkbox" name="inputCheck" value="garaje">garaje
        <input type="checkbox" name="inputCheck" value="piscina">piscina
        <input type="checkbox" name="inputCheck" value="ascensor">ascensor
    </br></br>
        <label for="inputFile">File</label></br>
        <input type="file" name="inputFile">
    </br></br>
        <label for="inputHidden">Hidden</label></br>
        <input type="text" name="inputHidden" hidden>
    </br></br>
        <label for="inputPass">Password</label></br>
        <input type="password" name="inputPass" >
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
        <label for="inputTextArea">Textarea</label></br>
        <textarea name="inputTextArea" cols="30" rows="10" placeholder="Texto en area">
        </textarea>
    </br></br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
';
//VALIDACION INPUTTEXT
    if (empty($_POST['inputText'])) {
        $inter['inputText'] = false;
    } else {
        $inputText = $_POST['inputText'];

    }
//VALIDACION RADIO
    if (empty($_POST['inputRadio'])) {
        $inter['inputRadio'] = false;
    } else {
        $inputRadio = $_POST['inputRadio'];

    }
//VALIDACION CHECKINPUT
    if (empty($_POST['inputCheck'])) {
        $inter['inputCheck'] = false;
    } else {
        $inputCheck = $_POST['inputCheck'];

    }
//VALIDACION FILEINPUT
    if (empty($_FILES['inputFile'])) {
        $inter['inputFile'] = false;
    } else {
        $inputFile = $_FILES['inputFile']; 
    }
//VALIDACION HiddenINPUT
    if (empty($_POST['inputHidden'])) {
        $inter['inputHidden'] = false;
    } else {
        $inputHidden = $_POST['inputHidden'];

    }
//VALIDACION passInput
    if (empty($_POST['inputPass'])) {
        $inter['inputPass'] = false;
    } else {
        $inputPass = $_POST['inputPass'];

    }
//VALIDACION COLORES
    if (empty($_POST['colores[]'])) {
        $inter['colores'] = false;
    } else {
        $colores = $_POST['colores[]'];
        
    }
//VALIDACION IDIOMAS
    if (empty($_POST['idiomas[]'])) {
        $inter['idiomas'] = false;
    } else {
        $idiomas = $_POST['idiomas[]'];
        
    }




//COMPROBACION DE ERRORES
    if (in_array(false , $inter)) {
        echo $formulario;
        var_dump($inter);
    } else {
        echo 'Formulario enviado correctamente';
    }
?>