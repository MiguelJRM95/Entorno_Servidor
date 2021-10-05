<?php

	// Bloque de procesamiento
	if($_SERVER["REQUEST_METHOD"] == "POST") {
			echo $_POST["nombre"];
	
	}
	

	// Bloque inical
	if($_SERVER["REQUEST_METHOD"] == "GET") {
	
	?>
		
		<form 
		action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" 
		method="post">
			<input name="nombre" type="text">
			<input type="submit" value="Enviar">
		</form>
	
	<?php 
	
	} 
	
	?>
	