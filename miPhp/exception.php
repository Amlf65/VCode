<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function dividir($dividendo, $divisor) {
            if ($divisor === 0) {
                throw new Exception("No se puede dividir entre cero.");
            }
            return $dividendo / $divisor;
        }
        
        try {
            $resultado = dividir(10, 0);
            echo "El resultado de la división es: " . $resultado;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
</body>
</html>


<!-- otros ejemplos de excepciones
try {
    // Código que puede lanzar una excepción
    throw new Exception("Ocurrió un error general.");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} 

try {
    // Código que puede generar un error de tiempo de ejecución
    $resultado = 10 / 0; // DivisionByZeroError
} catch (Error $e) {
    echo "Error: " . $e->getMessage();
}

try {
    // Código que puede lanzar una RuntimeException
    if ($condition) {
        throw new RuntimeException("Se produjo un error en tiempo de ejecución.");
    }
} catch (RuntimeException $e) {
    echo "Error: " . $e->getMessage();
}

function dividir($dividendo, $divisor) {
    if ($divisor === 0) {
        throw new InvalidArgumentException("El divisor no puede ser cero.");
    }
    return $dividendo / $divisor;
}

try {
    $resultado = dividir(10, 0);
    echo "El resultado de la división es: " . $resultado;
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

$frutas = array("manzana", "banana", "cereza");

try {
    $fruta = $frutas[3]; // Accediendo a una posición fuera de rango
    echo "La fruta es: " . $fruta;
} catch (OutOfBoundsException $e) {
    echo "Error: " . $e->getMessage();
}

-->
