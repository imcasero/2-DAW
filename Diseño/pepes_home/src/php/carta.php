<?php
$respuesta = '';
$GLOBALS['DB_IP'] = '127.0.0.1';
$GLOBALS['DB_USER'] = 'root';
$GLOBALS['DB_PASS'] = 'root';
$GLOBALS['DB_NAME'] = 'pepes_home';

$db = mysqli_connect($GLOBALS['DB_IP'] , $GLOBALS['DB_USER'] , $GLOBALS['DB_PASS']);
if (!$db){
    die('No se puedo conectar con la BD' );
}
mysqli_select_db($db ,  $GLOBALS['DB_NAME']);
$query = "SELECT * FROM carta";
$result = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($result)) {
    $respuesta .= '<tr>';
    $respuesta.= "<td>" . $row['id_plato'] . "</td>";
    $respuesta.= "<td>" . $row['nombre'] . "</td>";
    switch ($row['cat']) {
        case '1':
            $respuesta.= "<td>entrante</td>";
            break;
        
        case '2':
            $respuesta.= "<td>principal</td>";
            break;
        case '3':
            $respuesta.= "<td>postre</td>";
            break;
    }
    $respuesta .= '</tr>';
}


echo $respuesta;
?>