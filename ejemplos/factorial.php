<?php
    require "constante.php";
    require "funcionFactorial.php";
    #$var_miFactorial = 5;
    $var_result = 1;
    for ($i=1; $i < number; $i++) { 
        echo "Iteracion numero: ".$i." -> ".$var_result."</br>";
        if (number === 0) {
            $var_result = 1;
            break;
        }
        $var_result+=$i*$var_result;
    }
    echo "Factorial desde fichero con constante: ".$var_result;
    echo "</br>";
    echo "Factorial desde fichero con funcion: ";
    doFactorial(number);