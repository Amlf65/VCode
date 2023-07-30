<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL preparada con marcadores de posición
$sql = "SELECT id, nombre FROM usuario WHERE id = ?";
$id = 1; // Valor del parámetro

// Preparar la consulta
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id); // "i" indica que el parámetro es de tipo entero

// Ejecutar la consulta
$stmt->execute();

// Obtener los resultados
$result = $stmt->get_result();

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iterar sobre los resultados
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>