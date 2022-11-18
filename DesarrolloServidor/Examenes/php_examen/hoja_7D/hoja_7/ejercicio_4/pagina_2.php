<?php

if(isset($_POST['enviar'])){

$validar_nombre=false;
$validar_comen=false;

	if(isset($_POST['nombre'])){
	
		
		$nombre=$_POST['nombre'];
	
	}
	
	else{
	
		$validar_nombre=true;
	}
	
	
	if(isset($_POST['comentario'])){
	
		$comentario=$_POST['comentario'];

	}

	
	else{
	
		$validar_comen=true;
	
	}



	
	if(strlen($nombre)==0){
	
		$validar_nombre=true;
	
	}
	
	
	
	if(strlen($comentario)==0){
	
		$validar_comen=true;
	
	}
	
	
	if($validar_comen==true || $validar_nombre==true){
	
	
		echo "NO se puede, algun campo esta mal";
	
	}
	
	else{
	
	
	$cadena="
---------------------------------------------------------------------------
	$nombre
	$comentario
---------------------------------------------------------------------------

										";
		
		$a = fopen("datos.txt","a+");
	
		fwrite($a,$cadena);
	
	
		fclose($a);
	
	
	echo "Se ha guardado los datos correctamente :)<br>";
	
	echo '<a href=".\pagina_3.php">Ver fichero</a>';
	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	




}


else{


	echo "Error , no se ha enviado nada";

}























?>
