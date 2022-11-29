<?php
//BASICO
    $hoy = new DateTime('now');
    echo  $hoy->format("Y-m-d H:i:s") .'<br>';
    $ayer = new DateTime('yesterday');
    echo  $ayer->format("Y-m-d H:i:s").'<br>';
    $maniana = new DateTime('tomorrow');
    echo  $maniana->format("Y-m-d H:i:s").'<br>';

//ZONA HORARIA
    date_default_timezone_set('Europe/Madrid');
    $nuevaFecha = new DateTime(); //Se genera objeto con la fecha actual
    echo $nuevaFecha->format("Y-m-d H:i:s"); // formato aceptado por date()
    echo '<br>';
    date_default_timezone_set('Europe/London'); //puede fallar si contradice php.ini no es recomendable
    $nuevaFecha = new DateTime();
    echo $nuevaFecha->format("Y-m-d H:i:s");
    echo '<br>';
    if (date_default_timezone_get())
        echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
    if (ini_get('date.tmezone'))
        echo 'date.timezone: ' . ini_get('date.timezone');
//FORMA CORRECTA
    // obtener y mostrar la hora actual en Europe/London
    $zona = new DateTimeZone('Europe/London'); //solo para esta variable
    $fecha = new DateTime('now', $zona); //NULL no funciona aqui no se porque
    echo '<br>' . $fecha->format('H:i:s');

//INTERVALOS
    $intervalo = new DateInterval('P2Y3M1DT2H');
    $fecha = new DateTime();
    $fecha->add(new DateInterval('P2Y3M1DT2H'));
    echo '<br>' . $fecha->format("Y-m-d H:i:s");
?>