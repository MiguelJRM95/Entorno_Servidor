<?php
    function doFactorial($number){
        $var_result = 1;
        if($number<0){
            return "Error $number no puede ser negativo";
        }
        if ($number === 0) {
            $var_result = 1;
            return "Resultado factorial de $number: ".$var_result;
        }
        for ($i=1; $i < $number; $i++) { 
            echo "Iteracion numero: ".$i." &rArr; ".$var_result."</br>";
            if ($number === 0) {
                $var_result = 1;
                break;
            }
            $var_result+=$i*$var_result;
        }
        return "Resultado factorial de $number: ".$var_result;
    }