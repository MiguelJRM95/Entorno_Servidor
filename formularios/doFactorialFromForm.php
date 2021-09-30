<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
 <?php
    require "../ejemplos/funcionFactorial.php";
    $number = $_GET["number"];
    $result = doFactorial($number);
    echo "<html><body>";
    echo $result;
    echo "<body></html>";
    


