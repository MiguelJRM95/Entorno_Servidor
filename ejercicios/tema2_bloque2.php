<?php
    #Ex. 1
    function saludoDate(){
        $hora = date('h');
        switch ($hora) {
            case ($hora >= 8 && $hora < 13):
                echo "Buenos días";
                break;
            case ($hora >= 13 && $hora <= 15):
                echo "Que aproveche";
                break;
            case ($hora > 15 && $hora < 17):
                echo "Hora del café";
                break;
            case ($hora > 17 && $hora <= 20):
                echo "Hora de merendar";
                break;
            default:
                echo "Buenas noches";
                break;
        }
    }

    #Ex. 2
    function checkSum($a, $b, $c){
        if($a+$b == $c){return "$c es la suma de $a más $b";}
        if($a+$c == $b){return "$b es la suma de $a más $c";}
        if($b+$c == $a){return "$a es la suma de $b más $c";}
       
        return false;
    }

    #Ex. 3
    function sumProdNum(){
        $totSearch=[
            "suma_pares" => 0,
            "producto_impares" => 0
        ];

        $count1 = 0;
        $count2 = 0;

        for ($i=0; ($count1 < 20 && $count2 < 20); $i++) { 
            
            if($i%2==0){
                $count1++;
                $totSearch["suma_pares"]+=$i;
            }
            if($i%2!==0){
                $count2++;
                if( $totSearch["producto_impares"] === 0){
                    $totSearch["producto_impares"] = $i;
                }else{
                    $totSearch["producto_impares"]*=$i;
                } 
            }
        }

        return $totSearch;
    }

    #Ex. 4
    function mixStrings(){
        $cadena = "El volcán nunca deja de expulsar lava.";
        $ciudad = "de la Palma";
        return (explode("volcán", $cadena)[0] . " volcán " . $ciudad . explode("volcán", $cadena)[1]);
    }

    #Ex. 5
    function devuelveNombre($nombre, $apellido1, $apellido2, $opcion){
        switch ($opcion) {
            case "L":
                return strtolower($nombre)." ".strtolower($apellido1)." ".strtolower($apellido2);
                break;
            case "U":
                return strtoupper($nombre)." ".strtoupper($apellido1)." ".strtoupper($apellido2);
                break;
            case "I":
                return substr(strtoupper($nombre), 0)[0].".".substr(strtoupper($apellido1), 0)[0].".".substr(strtoupper($apellido2), 0)[0];
                break;
            default:
                return false;
                break;
        }
    }

    #Ex.6
    function generateDNI(){
        $number = 0;
        $number+=random_int(0,99999999);
        return sprintf('%08d%s', $number, strval(chr(random_int(65,90))));
    }

?>