<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    // Crear una conexión PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Habilitar el modo de excepciones en PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL preparada con marcadores de posición
    $sql = "SELECT id, nombre FROM usuario WHERE id = :id";

    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Asignar valores a los marcadores de posición
    $id = 1; // Valor del parámetro
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener los resultados
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Verificar si hay resultados
    if (count($result) > 0) {
        // Iterar sobre los resultados
        foreach ($result as $row) {
            echo "ID: " . $row['id'] . " - Nombre: " . $row['nombre'] . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

// Cerrar la conexión
$conn = null;
?>
