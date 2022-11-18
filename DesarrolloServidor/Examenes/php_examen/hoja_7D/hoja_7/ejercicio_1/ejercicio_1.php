<?php

/*
Realiza una página llamada lectura.php en la que lea el contenido de una de las páginas web hechas
hasta ahora, lo guarde a un fchero local llamado fch_salida.ttt y escriba el número total de bytes
escritos.


*/


$a = fopen("prueba.php","a+");
$b = fopen("fichero.txt","a+");


	while(!feof($a)){
	
		$linea=fgets($a);
		
		fwrite($b,$linea);
		
	
	}

fclose($a);

	$linea ="Tamaño del fichero: ".filesize("prueba.php")." bytes";
	fwrite($b,$linea);

	rewind($b);

	while(!feof($b)){
	
		echo fgets($b)."<br>";
	
	}

fclose($b);

?>

