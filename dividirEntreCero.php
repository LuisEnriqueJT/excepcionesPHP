<?php
	try {
		$variable = 100;
		
		//Se valida si existe el divisor
		if(isset($_GET['divisor'])){
			
			//inicio de la validacion del divisor
			if($_GET['divisor']!=0){
				echo "El resultado de la division es: ".$variable/$_GET['divisor'];
			}else{
				//Entra aquí si el divisor es 0
				throw new Exception("No se puede dividir entre 0<br>");
			}

		}else{
			//Entra aquí si no se pasa el parametro por el GET
			throw new Exception("No existe el divisor");
			
		}

		
	} catch (Exception $e) {
		echo "<h1>Existe un erro en tu operacion: ".$e->getMessage()."</h1><br/>";
	}
?>