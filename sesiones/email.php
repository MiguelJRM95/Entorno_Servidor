<?php
    session_start();

    if(!isset($_SESSION['emails'])){
        $_SESSION['emails']=[];
    }

    if(isset($_SESSION['emails'])){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {  	
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            if($email==false){
                echo 'Email incorrecto, compruebeló y escribaló de nuevo, por favor';
            }else{	
                array_push($_SESSION['emails'], $email);
                header("Location: email.php?emails=true");	
            }
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email List</title>
</head>
<body>
    
    <?php if(isset($_GET['emails'])){
                foreach ($_SESSION['emails'] as $e) {
                    echo "<p>".$e."</p>";
                }
            } 
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		Ingresa Email
		<input name="email" type="text">						
		<input type = "submit">
	</form>
</body>
</html>