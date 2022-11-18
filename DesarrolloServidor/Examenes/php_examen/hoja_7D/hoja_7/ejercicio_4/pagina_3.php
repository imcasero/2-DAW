<?php

$a = fopen("datos.txt","a+");

while(!feof($a)){
	
		echo fgets($a)."<br>";
		
	}

fclose($a);



?>
