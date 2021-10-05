<?php

	// Compruebo si ha metido los parámetros
	if(!isset($_GET["num1"]) || !isset($_GET["num2"])) {
		
		echo "ERROR: NO HAY PARAMETROS <br>";
		
	} else {
	
		// Compruebo si tiene un valor asociado cada parámetro 
		if(empty($_GET["num1"]) || empty($_GET["num2"])) {
			
			echo "ERROR: ALGÚN PARÁMETRO VACÍO <br>";
			
		} else {
	
			// Todo ha ido bien
			echo "La suma es: " . $_GET["num1"] + $_GET["num2"];
			
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	if(empty($_GET["prueba"]))
		echo "Está vacío<br>";
	else
		echo "No está vacío<br>";
	
	
	if(isset($_GET["prueba"]))
		echo "SET<br>";
	else
		echo "No SET<br>";*/