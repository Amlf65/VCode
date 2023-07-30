<?php
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

// Iniciar la transacción
$conn->autocommit(false);

try {
    // Realizar las operaciones de la transacción
    $sql1 = "UPDATE tabla SET nombre = 'Ambrosio' WHERE id=1";
    $result1 = $conn->query($sql1);

    $sql2 = "INSERT INTO tabla (nombre) VALUES ('Santiago')";
    $result2 = $conn->query($sql2);

    // Verificar si todas las operaciones se ejecutaron correctamente
    if ($result1 && $result2) {
        // Confirmar la transacción
        $conn->commit();
        echo "Transacción completada correctamente.";
    } else {
        // Revertir la transacción
        $conn->rollback();
        echo "Error en la transacción. Se ha revertido.";
    }
} catch (Exception $e) {
    // Revertir la transacción en caso de excepción
    $conn->rollback();
    echo "Error en la transacción. Se ha revertido.";
}

// Restaurar el modo de autocommit
$conn->autocommit(true);

// Cerrar la conexión
$conn->close();
?>