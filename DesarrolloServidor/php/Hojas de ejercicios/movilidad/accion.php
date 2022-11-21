<?php
    //Variables del formulario

    $matricula = $_POST['matricula'];
    $direccion = $_POST['direccion'];
    $fecha_inicio = $_POST['fechainicio'];
    $fecha_fim = $_POST['fechafin'];
    $justificante = $_FILES['justificante'];

    //Variable de errores

    $errors = array();

    //Validacion de las variables

    //matricula
    if (empty($matricula)) {
        $errors['matricula'] = false;
    }else {
        $errors['matricula'] = true;
    }

    //direccion
    if (empty($direccion)) {
        $errors['direccion'] = false;
    }else {
        $errors['direccion'] = true;
    }

    //fecha inicio
    if (empty($fecha_inicio)) {
        $errors['fecha_inicio'] = false;
    }else {
        $errors['fecha_inicio'] = true;
    }

    //fecha fim
    if (empty($fecha_fin)) {
        $errors['fecha_fin'] = false;
    }else {
        $errors['fecha_fin'] = true;
    }

    //justificante
    if (empty($justificante)) {
        $errors['justificante'] = false;
    }else {
        $errors['justificante'] = true;
    }

    //Validacion de las variables
    if (in_array(false , $errors)) {
        echo 'valores incompletos';
    }else {
        echo 'valores completos';
    }
?>