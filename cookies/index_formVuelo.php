<?php
    #INICIAR COOKIE
    if (!isset($_COOKIE['nombre']) && isset($_POST['nombre'])) {
        setcookie('nombre', $_POST['nombre'], time() + 3600 * 24);
    }
    if (!isset($_COOKIE['asiento']) && isset($_POST['asientos'])) {
        setcookie('asiento', $_POST['asientos'], time() + 3600 * 24);
    }
    if (!isset($_COOKIE['menu']) && isset($_POST['menu'])) {
        setcookie('menu', $_POST['menu'], time() + 3600 * 24);
    }
?>

<?php
    #SOBREESCRIBIR COOKIE
    if(isset($_COOKIE['nombre']) && isset($_POST['nombre'])){
        setcookie('nombre', $_POST['nombre'], time() + 3600 * 24);
    }
    if(isset($_COOKIE['asiento']) && isset($_POST['asientos'])){
        setcookie('asiento', $_POST['asientos'], time() + 3600 * 24);
        $asiento = $_COOKIE['asiento'];
    }
    if(isset($_COOKIE['menu']) && isset($_POST['menu'])){
        setcookie('menu', $_POST['menu'], time() + 3600 * 24);
    }
?>

<?php
    #VACIAR COOKIE o CAMPO
    if(!isset($_POST['nombre'])){
        setcookie('nombre', "", -99999);
    }
    if(!isset($_POST['asientos'])){
        setcookie('asiento', "", -99999);
    }
    if(!isset($_POST['menu'])){
        setcookie('menu', "", -99999);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelo Volador</title>
</head>
<body>
    <header>
        <h1>Bienvenido, configure su billete</h1>
    </header>
    <body>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            Indque su nombre: 
                <?php 
                    if(isset($_COOKIE['nombre']) && !isset($_POST['nombre'])) {
                        echo "<input type='text'"."value=".$_COOKIE['nombre']." name='nombre'>";
                    }else{
                        echo "<input type='text' name='nombre'>";
                    }
                ?>
            </br>
            </br>
            Asiento: 
                <select name="asientos">
                        <option>Elige Asiento</option>
                    <?php 
                        if(isset($_COOKIE['asiento']) && $_COOKIE['asiento']==="pasillo") {
                            echo "<option value='pasillo' selected>Pasillo</option>";
                        }else{
                            echo "<option value='pasillo'>Pasillo</option>";
                        }

                        if(isset($_COOKIE['asiento']) && $_COOKIE['asiento']==="ventana") {
                            echo "<option value='ventana' selected>Ventana</option>";
                        }else{
                            echo "<option value='ventana'>Ventana</option>";
                        }

                        if(isset($_COOKIE['asiento']) && $_COOKIE['asiento']==="centro") {
                            echo "<option value='centro' selected>Centro</option>";
                        }else{
                            echo "<option value='centro'>Centro</option>";
                        }
                    ?>
                </select>
            </br>
            </br>
            Menu: 
                <?php
                    if(isset($_COOKIE['menu']) && !isset($_POST['menu'])){
                        echo "<input type='checkbox' checked name='menu' value='menu'/>";
                    }else{
                        echo "<input type='checkbox' name='menu' value='menu'/>";
                    }
                ?>
            </br>
            </br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
