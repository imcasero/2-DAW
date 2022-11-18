<?php

/*
Realizar un contador de visitas en PHP.
 Crearemos un fchero de tetto “visitas.txt” y escribiremos en él un 0.
 Crearemos un fchero contador.php e implementaremos en él las siguientes instrucciones:
1. Abrir el fchero en modo lectura / escritura.
2. Leer del fchero 8 bytes (ó la cantdad deseada) y guardarlos en una variable que
llamaremos $contador
3. Escribir en pantalla: “Esta es la visita numero: $contador”
4. Incrementar el contador en una unidad
5. Colocar el puntero al principio del fchero
6. Escribir el nuevo valor del contador en el fchero
7. Cerrar el fchero


*/

$contador;


$a = fopen("visitas.txt","a+");

	
	$contador=fgets($a,8);
		
	$contador++;
	
	echo "Esta es la visita numero: $contador";
	
fclose($a);



$a = fopen("visitas.txt","w");

	fwrite($a,$contador);

fclose($a);	




	
?>

