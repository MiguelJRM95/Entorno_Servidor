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

    #Ex. 4
    function palindrome($word){
        $isPalindrome=false;
        if(stristr(strrev($word), $word))
            $isPalindrome=true;
        return $result = $isPalindrome===false?"No es palindromo":"Es un palindromo";
    }
    
    #Ex.5
    function lessThan($numbers, $limiter){
        $newArray = [];
        foreach ($numbers as $n) {
            if(!is_numeric($n)){
                return "Un elemento del array no es numerico";
            }
        }
        for ($i=0; $i < count($numbers); $i++) { 
            if($numbers[$i]<$limiter)
                array_push($newArray, $numbers[$i]);
        }
        return $newArray;
    }

    #Ex. 7
    function esPrimo($numero){
        $primo = true;
        #early return
        if($numero === 1 || $numero%2===0)
            $primo = false;
        for ($i=3; $i < ceil(sqrt($numero)) ; $i = $i+2) { 
            if($numero % $i == 0)
                $primo = false;
            else
                $primo = true;
        }
        return $primo===false?"No es primo":"Es primo";
    }

    #Ex. 8
    function checkMatricula($matricula){
        $isMatricula = true;
        if(strlen($matricula) !== 8)
            return "Matricula no valida";
        $matNum = explode(" ",$matricula)[0];
        $matLet = explode(" ",$matricula)[1];
        for ($i=0; $i < strlen($matNum); $i++) { 
            if(!is_numeric($matNum[$i])) {
                $isMatricula = false;
            }
        }
        for ($i=0; $i < strlen($matLet); $i++) { 
            if(!is_string($matLet[$i])) {
                $isMatricula = false;
            }
        }
        return $isMatricula===true?"Matricula valida":"Matricula no valida";
    }

    #Ex. 9
    function checkPass($password){
        $isValid=false;
        if(strlen($password)>=6 || strlen($password)<=15){
            $isValid=true;
        }
        foreach ($password as $letter) {
            if(is_numeric($letter))
                $isValid=true;
        }
        // TODO...
    }


    #Ex. 10
    function compareWords($text){
        $words = explode(" ", $text);
        $largest;
        for ($i=0; $i < count($words) - 1; $i++) { 
            if(strlen($words[$i]) < strlen($words[$i+1]))
                $largest = $words[$i+1];
        }
        return $largest;
    }

    #Ex. 11
    function checkTypeArray($arrayToCheck){
        $checked = true;
        for ($i=0; $i < count($arrayToCheck) - 1; $i++) { 
            if(gettype($arrayToCheck[$i]) !== gettype($arrayToCheck[$i+1]))
                $checked = false;
        }
        return $checked===true?"Es homogeneo":"No es homogeneo";
    }

    

    