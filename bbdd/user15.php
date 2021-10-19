<?php
    $usuario=;
    if(isset($_GET['usuario'])){
        $usuario=$_GET['usuario'];
        $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
        $usuario = 'root';
        $clave = 'atleti14';
        try {
            $bd = new PDO($cadena_conexion, $usuario, $clave);
            $sql = $bd->prepare("SELECT nombre, clave, rol FROM usuarios WHERE codigo = :codigo");
            $sql = $sql->execute(array($usuario));
            echo "Usuarios con codigo ".$usuario.": ".$preparada->rowCount()."<br>";
            foreach ($usuarios as $usu) {
		        print "Nombre : " . $usu['nombre']. "<br>";
		        print "Clave : " . $usu['clave'] . "<br>";
                print "Rol : ". $usu['rol'] . "<br>";
	        }
            $mybd=null;
        } catch (PDOException $e) {
            echo 'Error con la base de datos: ' . $e->getMessage();
        }
        
    }else{
        echo "no data";
    }
?>