<?php
if(isset($_POST['enviar'])){

$circuito=$_POST['circuito'];
$destino=$_POST['destino'];
$duracion=$_POST['duracion'];
$salida=$_POST['salida'];


$texto= file_get_contents('viaje.txt');

$pos = strpos($texto, $destino);

echo '<link rel="stylesheet" href="tabla.css">';
if(!$pos){

	echo"<p> Destino no encontrado, integrandolo en el registro...";
	echo "<br><br><br>";
	
	$cadena="$circuito:$destino:$duracion:$salida
";
	
	
	$a = fopen("viaje.txt","a+");
	
	fwrite($a,$cadena);
	
	fclose($a);
	
	
	$a = fopen("viaje.txt","a+");
	
	echo "<table>";
	
	echo "<tr>";
	
	echo "<th>Nombre</th>";
	echo "<th>Destino</th>";
	echo "<th>Duracion</th>";
	echo "<th>Salidas</th>";
	
	while(!feof($a)){
	
		$linea=fgets($a);
		$array_lineas= explode(":",$linea);
		echo "<tr>";
		
		foreach($array_lineas as $valor){
		
			echo"<td>$valor</td>";
		
		}
		
		echo "<tr>";
		
	}
	
	echo "</table>";
	
	fclose($a);
	
	echo'

		

		<h2>Agencia de viajes travelmas</h2>

		<form action=".\pagina_1.php" method="post" target="_self">
		Introduzca el nombre del circuito
		  <input type="text" name="circuito" value=""><br>
		<br>
		<br>

		Introduzca el destino
		  <input type="text" name="destino" value=""><br>
		<br>
		<br>

		Introduzca la duracion
		  <input type="text" name="duracion" value=""><br>
		<br>
		<br>

		Introduzca los dias de salida
		  <input type="text" name="salida" value=""><br>
		<br>
		<br>

		<br><br><br>
		  <input type="submit" name="enviar" value="Enviar">
		</form> 



		</body>
		</html>


';

	
	
}

else{

	echo "<p>Destino encontrado en el archivo, mostrando registros comunes...</p>";
	
	$a = fopen("viaje.txt","r");
	
	echo "<table>";
	
	echo "<tr>";
	
	echo "<th>Nombre</th>";
	echo "<th>Destino</th>";
	echo "<th>Duracion</th>";
	echo "<th>Salidas</th>";
	
	while(!feof($a)){
	
	
		$linea=fgets($a);
		if(strpos($linea, $destino)!==false){
		$array_lineas= explode(":",$linea);
		echo "<tr>";
		
		foreach($array_lineas as $valor){
		
			echo"<td>$valor</td>";
		
		}
		
		echo "<tr>";
		}
	
	}
	echo "</table>";
	
	fclose($a);
	
	
	
	echo'

		

		<h2>Agencia de viajes travelmas</h2>

		<form action=".\pagina_1.php" method="post" target="_self">
		Introduzca el nombre del circuito
		  <input type="text" name="circuito" value=""><br>
		<br>
		<br>

		Introduzca el destino
		  <input type="text" name="destino" value=""><br>
		<br>
		<br>

		Introduzca la duracion
		  <input type="text" name="duracion" value=""><br>
		<br>
		<br>

		Introduzca los dias de salida
		  <input type="text" name="salida" value=""><br>
		<br>
		<br>

		<br><br><br>
		  <input type="submit" name="enviar" value="Enviar">
		</form> 



		</body>
		</html>


';

	

	

}


}






else{



echo'

<!DOCTYPE html>
<html>
<body>

<h2>Agencia de viajes travelmas</h2>

<form action=".\pagina_1.php" method="post" target="_self">
Introduzca el nombre del circuito
  <input type="text" name="circuito" value=""><br>
<br>
<br>

Introduzca el destino
  <input type="text" name="destino" value=""><br>
<br>
<br>

Introduzca la duracion
  <input type="text" name="duracion" value=""><br>
<br>
<br>

Introduzca los dias de salida
  <input type="text" name="salida" value=""><br>
<br>
<br>

<br><br><br>
  <input type="submit" name="enviar" value="Enviar">
</form> 



</body>
</html>


';




}



















?>
