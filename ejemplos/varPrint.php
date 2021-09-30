<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>

<body>
    <?php 
        
        $var_empty;
        $var_double = 1.75;
        $var_string = "Hello world";
        $var_boolean = false;
    ?>
    <table border="1px">
        <thead>
            <th>Var 1 <?php echo $var_empty; ?></th>
            <th>Var 2 <?php echo $var_double; ?></th>
            <th>Var 3 <?php echo $var_string; ?></th>
            <th>Var 4 <?php echo $var_boolean; ?></th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($var_empty); ?></td>
                <td><?php echo gettype($var_double); ?></td>
                <td><?php echo gettype($var_string); ?></td>
                <td><?php echo gettype($var_boolean); ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>