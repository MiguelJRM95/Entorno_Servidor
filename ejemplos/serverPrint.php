<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>

<body>
    <h1>Lista de datos del navegador</h1>
    <ul>
        <li><?php  echo "Se ha accedido desde el dominio: ".$_SERVER['SERVER_NAME']; ?></li>
        <li><?php  echo "La fecha es: ".date('d-m-Y H:i:s',  $_SERVER['REQUEST_TIME']); ?></li>
        <li><?php  echo "El navegador es: ".$_SERVER['HTTP_USER_AGENT']; ?></li>
        <li><?php  echo "Lenguajes soportados: ".$_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></li>
    </ul>
</body>

</html>