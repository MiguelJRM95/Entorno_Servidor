<?php
    #Ex. 1,2,3;
    function ecSegGrado($numA, $numB, $numC){
        $result = [];
        $disc=($numB**$numB)-(4*$numA*$numC);
        $raiz=sqrt(($numB**$numB)-(4*$numA*$numC));
        $result[0] = ((-$numB)-($raiz))/2*$numA;
        $result[1] = ((-$numB)+($raiz))/2*$numA;
        if($disc<0){
            unset($result);
            return "No hay solucion real";
        }  
        return $result;
    }