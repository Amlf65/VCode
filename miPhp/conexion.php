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

// Consulta SQL
$sql = "SELECT * FROM usuario";

// Ejecutar la consulta
$result = $conn->query($sql);

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
$conn->close();
?>

<!-- base de datos :  test 
tabla : tabla
campos : id nombre -->