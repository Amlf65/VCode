<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulación de cadenas - PHP5</title>
</head>
<body>
    <?php
        $cad='Cadena de prueba'; 
        echo "cadena original:  $cad <br>"; 
        echo '$cad[3]'." = $cad[3]<br>";
        echo '$cad . cadena2: ' . "$cad cadena 2 <br>";
        echo "strpos($cad, 'a'): " . strpos($cad, 'a') . "<br>";
        echo "strlen($cad) : " . strlen($cad) . "<br>";
        echo "trim($cad) : " . trim($cad) . "<br>";
        echo "substr($cad, 3,3) : " . substr($cad,3,3) . "<br>"
    ?>
</body>
</html>