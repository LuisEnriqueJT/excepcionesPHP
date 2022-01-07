<?php
	try {
		$variable = 100;
		if($_GET['divisor']!=0){
			echo "El resultado de la division es: ".$variable/$_GET['divisor'];
		}else{
			throw new Exception("No se puede dividir entre 0<br>");
		}		
		
	} catch (Exception $e) {
		echo "<h1>Existe un erro en tu operacion: ".$e->getMessage()."</h1><br/>";
	}
?>