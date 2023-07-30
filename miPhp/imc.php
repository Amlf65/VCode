<?php
function calcularIMC($peso, $altura) {
    // Validar que el peso y la altura sean valores positivos
    if ($peso <= 0 || $altura <= 0) {
        return "El peso y la altura deben ser valores positivos.";
    }
    // pasar altura a metros
    $altura=$altura/100;
    // Calcular el IMC
    $imc = $peso / ($altura * $altura);

    // Determinar la clasificación del IMC
    if ($imc < 18.5) {
        $clasificacion = "Bajo peso";
    } elseif ($imc < 25) {
        $clasificacion = "Peso normal";
    } elseif ($imc < 30) {
        $clasificacion = "Sobrepeso";
    } else {
        $clasificacion = "Obesidad";
    }
    
    // Formatear el IMC con dos decimales
    $imc = number_format($imc, 2);

    // Devolver el resultado como un mensaje
    $mensaje = "Peso: " . $peso . " kg<br>";
    $mensaje .= "Altura: " . $altura . " m<br>";
    $mensaje .= "IMC: " . $imc . "<br>";
    $mensaje .= "Clasificación: " . $clasificacion;

    return $mensaje;
}

// Ejemplo de uso de la función
// $peso = 70;
// $altura = 1.75;

// $resultado = calcularIMC($peso, $altura);
// echo $resultado;
?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMC</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Peso:  <input type="text" name="peso"></label>
            <label>Altura: <input type="text"  name="altura"></label>
            <button type="submit">Calcular</button>
        </form>
        
    </body>
    </html>
<?php

if(isset($_POST["peso"]) and isset($_POST["altura"])) {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $resultado = calcularIMC($peso, $altura);
    echo $resultado;
}


?>
