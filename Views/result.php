<?php
    require "../Models/operacion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body{font-family:Cambria;}
        h2{color:red}
    </style>
</head>
<body>
    <h2><?php echo "Resultado de la {$op} = " . (string)$result; ?></h2>
</body>
</html>