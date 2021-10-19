<?php
    if(isset($_GET['usuario'])){
        $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1;port=3307';
        $usuario = 'root';
        $clave = 'atleti14';
        $claveUs = (int)$_GET['usuario'];
        try {
            $bd = new PDO($cadena_conexion, $usuario, $clave);
            $sql = $bd->prepare("SELECT nombre, clave, rol FROM usuarios WHERE codigo = :codigo");
            $sql = $sql->execute(':codigo' => $claveUs);
            echo "Usuarios con codigo ".$claveUs.": ".$sql->rowCount()."<br>";
            foreach ($usuarios as $usu) {
		        print "Nombre : " . $usu['nombre']. "<br>";
		        print "Clave : " . $usu['clave'] . "<br>";
                print "Rol : ". $usu['rol'] . "<br>";
	        }
        } catch (\Throwable $th) {
            echo 'Error con la base de datos: ' . $th->getMessage();
        }
    }else{
        echo 'no data';
    }
?>

            
            