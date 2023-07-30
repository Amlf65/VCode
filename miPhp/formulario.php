<?php
    header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<form method="post" action="">
    <input type="text" name="campo1" value="">
    <input type="submit" value="Enviar formulario">
</form> 
</body>
</html>
<?php
    if (isset($_POST["campo1"])) {
        $cad=$_POST["campo1"];
        echo "<h2>cadena original:  $cad <br>"; 
        echo '$cad[3] : ' . $cad[3] . "<br>";
        echo '$cad . cadena2: ' . "$cad cadena 2 <br>";
        echo "strpos($cad, 'a'): " . strpos($cad, 'a') . "<br>";
        echo "strlen($cad) : " . strlen($cad) . "<br>";
        echo "trim($cad) : " . trim($cad) . "<br>";
        echo "substr($cad, 3,3) : " . substr($cad,3,3) . "<br><h2>";
    }  
?>