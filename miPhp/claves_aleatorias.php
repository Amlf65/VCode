
<?php
function generarContrasena() {
    // Determinar longitud de contraseña
    $longitud= rand(8,12);
    // Caracteres permitidos en la contraseña
    $caracteres = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*()_-=+ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+';

    // Obtener la longitud total de los caracteres permitidos
    $numCaracteres = strlen($caracteres);

    // Generar la contraseña aleatoria
    $contrasena = '';
    for ($i = 0; $i < $longitud; $i++) {
        $indiceAleatorio = rand(0, $numCaracteres - 1);
        $contrasena .= $caracteres[$indiceAleatorio];
    }

    return $contrasena;
}

// Generar una contraseña de longitud predeterminada (8 caracteres)
$contrasena1 = generarContrasena();


// Imprimir las contraseñas generadas
echo "Contraseña 1: " . $contrasena1 . "<br>";
?>