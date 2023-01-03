<?php
// echo '
//     <!DOCTYPE html>
//         <html lang="en">
//         <head>
//             <meta charset="UTF-8">
//             <meta http-equiv="X-UA-Compatible" content="IE=edge">
//             <meta name="viewport" content="width=device-width, initial-scale=1.0">
//             <title>Document</title>
//             <link rel="stylesheet" href="style.css">
//         </head>
//         <body>
//             <form action>

//             </form>
//         </body>
//     </html>
// ';


    
//     $fic = @fopen($ruta , 'r');
//     if (!$fic) { 
//         die('Problema con el fichero');
//     } 
//     while(!feof($fic)){
//         array_push($resul , fgets($fic));
//     }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insertar()" method="post">
        alumnos<select name="select" >
            <?php
            $i=0;
                $fic = @fopen('alumnos.txt' , 'r');
                if (!$fic) { 
                    die('Problema con el fichero');
                } 
                while(!feof($fic)){
                    echo '<option value="'.$i.'">'.fgets($fic).'</option>';
                    $i++;
                }
            ?>
        </select>

    </form>
</body>
</html>