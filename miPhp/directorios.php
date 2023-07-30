<?php
$directorio = ".";

// Verificar si el directorio existe
if (is_dir($directorio)) {
    echo "El directorio $directorio ya existe.<br>";
} else {
    // Crear el directorio
    if (mkdir($directorio)) {
        echo "Se ha creado el directorio $directorio.<br>";
    } else {
        echo "No se pudo crear el directorio $directorio.<br>";
    }
}

// Obtener la lista de archivos y directorios en un directorio
$archivos = scandir($directorio);
echo "Archivos en el directorio $directorio:<br>";
foreach ($archivos as $archivo) {
    if ($archivo !== "." && $archivo !== "..") {
        echo "$archivo<br>";
    }
}

// Eliminar un directorio y su contenido
// if (rmdir($directorio)) {
//     echo "Se ha eliminado el directorio $directorio.<br>";
// } else {
//     echo "No se pudo eliminar el directorio $directorio.<br>";
// }
?>