<?php
    #Ex.1 => mod php.ini apache
    function error(){
        $notDeclare;
        echo $notDeclare;
    }
    error();

    #Ex.2
    function doFactorial($number){
        $var_result = 1;
        if($number<0){
            throw new Exception("Error $number no puede ser negativo");
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

    #Ex.3
    class Controlador{
        private $titulo;
        private $color;
        private $saludo;

        function __construct($titulo, $color, $saludo){
            $this->titulo = $titulo;
            $this->color = $color;
            $this->saludo = $saludo;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        public function getColor(){
            return $this->color;
        }
        public function getSaludo(){
            return $this->saludo;
        }

        public function setTitulo($titulo){
            $this->titulo=$titulo;
        }
        public function setColor($color){
            $this->color=$color;
        }
        public function setSaludo($saludo){
            $this->saludo=$saludo;
        }

        public function __template(){
            return "
                <!DOCTYPE html>
                <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <title>".$this->getTitulo()."</title>
                    <style>
                        body{
                            background-color:".$this->getColor().";
                        }
                    </style>
                </head>
                <body>
                    <h1>".$this->getSaludo()."</h1>   
                </body>
                </html>
            ";
        }

    }
    $template = new Controlador("Web Template", "coral", "Hello World");
    echo $template ->__template();

    #Ex.4 
    class Persona {
        private $DNI;
        private $nombre;
        private $edad;
        function __construct($DNI, $nombre, $edad) {
            $this->DNI = $DNI;
            $this->nombre = $nombre;
            $this->edad = $edad;        
        }
        public function getNombre() {
            return $this->nombre;
        }
        public function getApellido() {
            return $this->apellido;
        }
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        public function setEdad($edad) {
            $this->edad = $edad;
        }
        public function __toString() {
            return "Persona: ".$this->nombre ." ".$this->apellido.$this->edad;
        }
    }
    class Cliente extends Persona{
        private $saldo = 0;
        
        function __construct($DNI, $nombre, $apellido, $saldo){	
             parent::__construct($DNI, $nombre, $apellido);
             $this->$saldo = $saldo;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        public function __toString(){
            return  "Cliente: ". $this->getNombre() ;
        }      
    }
?>