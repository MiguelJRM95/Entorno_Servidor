<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        $titles = ["motor", "pelota", "raqueta"];
        $motor = ["Nascar", "Formula 1", "MotoGP", "Gran Prix"];
        $pelota = ["Baloncesto", "Futbol", "Voleybol", "Pelota Vasca"];
        $raqueta = ["Tenis", "Badminton", "Tenis de mesa", "Padel"];

        echo $motor[0]."-".$raqueta[3];
    ?></title>
</head>
<body>
    <table border=1px>
        <thead>
            <?php
                for ($i=0; $i < count($titles); $i++) { 
                    echo "<th>".$titles[$i]."</th>";
                }
            ?>
        </thead>
        <tbody>
            <?php
                for ($i=0; $i < count($motor); $i++) {  
                    echo "<tr>";
                    echo "<td>".$motor[$i]."</td>";
                    for ($j=0; $j < count($pelota); $j++) { 
                        echo "<td>".$pelota[$j+$i]."</td>";
                        for ($k=0; $k < count($raqueta); $k++) { 
                            echo "<td>".$raqueta[$k+$i]."</td>";
                            break 2;
                        }
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>