<?php
function calcularPropina($totalFactura, $porcentajePropina) {
    // Validar que el porcentaje de propina esté entre 0 y 100
    if ($porcentajePropina < 0 || $porcentajePropina > 50) {
        return "El porcentaje de propina debe estar entre 0 y 50.";
    }

    // Calcular el monto de la propina
    $propina = $totalFactura * ($porcentajePropina / 100);

    // Calcular el total a pagar incluyendo la propina
    $totalPagar = $totalFactura + $propina;

    // Formatear los resultados con dos decimales
    $propina = number_format($propina, 2);
    $totalPagar = number_format($totalPagar, 2);

    // Devolver el resultado como un mensaje
    $mensaje = "Total de la factura: $" . $totalFactura . "<br>";
    $mensaje .= "Porcentaje de propina: " . $porcentajePropina . "%<br>";
    $mensaje .= "Monto de la propina: $" . $propina . "<br>";
    $mensaje .= "Total a pagar: $" . $totalPagar;

    return $mensaje;
}

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Propinas</title>
    </head>
    <body>
        <form action="" method="POST">
            <label>Total Importe: <input type="text" name="importe"></label>
            <label>% propina: <input type="number" min="0" max="30" name="propina"></label>
            <button type="submit">Calcular</button>
        </form>
        
    </body>
    </html>
<?php

if(isset($_POST["importe"]) and isset($_POST["propina"])) {
    $totalFactura = $_POST["importe"];
    $porcentajePropina = $_POST["propina"];

    $resultado = calcularPropina($totalFactura, $porcentajePropina);
    echo $resultado;
}


?>
