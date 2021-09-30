<?php
    function potencia($var1, $var2="0"){
        $_result=0;
       
        $_result=$var1**$var2;

        if($var1<0 && ($var2%2)!==0){
            $_result = -$_result;
        }
        
        return "$var1 elevado a $var2 es: ".$_result;
    }

    function potenciaCorta($var1, $var2="0"){ 
        return $var1**$var2;
    }

    echo potencia(-2,4);
    echo "<br>";
    echo (-2)**4;
    echo "<br>";
    echo potencia(-2);