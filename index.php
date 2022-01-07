<?php 
/*Una excepcion es un fallo, un error que se produce en nuestro codigo*/

//Sirve para captura excpeciones en codigo susceptible a errores, si el error se comete capturo la excepcion y muestro un mensaje
try {

	if(isset($_GET['id'])){
		echo "El parametro de GET es: {$_GET['id']}";
	}else{
		throw new Exception("Hay un error");
	}

} catch (Exception $e) {
	
	echo "Ha ocurrido un error".$e->getMessage();

}finally{
	
	echo "<h1>Este codigo siempre se ejecutara independiente a el try y el catch<h1>";

}

?>