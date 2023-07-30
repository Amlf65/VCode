<!-- crear clase conexion -->
<?php

class Conexion {
    private $host = 'nombre_del_host';
    private $dbname = 'nombre_de_la_base_de_datos';
    private $usuario = 'nombre_de_usuario';
    private $password = 'contraseña';

    private $conexion;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname}";
        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->conexion = new PDO($dsn, $this->usuario, $this->password, $opciones);
        } catch (PDOException $e) {
            echo 'Error de conexión: ' . $e->getMessage();
            exit;
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function ejecutarActualizacion($tabla, $datos, $condicion) {
        $actualizaciones = '';

        foreach ($datos as $columna => $valor) {
            $actualizaciones .= "{$columna} = :{$columna}, ";
        }

        $actualizaciones = rtrim($actualizaciones, ', ');

        $consulta = "UPDATE {$tabla} SET {$actualizaciones} WHERE {$condicion}";

        $statement = $this->conexion->prepare($consulta);

        if (!$statement) {
            throw new Exception('Error en la consulta preparada: ' . $this->conexion->errorInfo()[2]);
        }

        $resultado = $statement->execute($datos);

        if (!$resultado) {
            throw new Exception('Error al ejecutar la consulta preparada: ' . $statement->errorInfo()[2]);
        }

        return $statement->rowCount();
    }

    public function ejecutarInsercionPreparada($tabla, $datos) {
        $columnas = implode(', ', array_keys($datos));
        $valores = ':' . implode(', :', array_keys($datos));

        $consulta = "INSERT INTO {$tabla} ({$columnas}) VALUES ({$valores})";

        $statement = $this->conexion->prepare($consulta);

        if (!$statement) {
            throw new Exception('Error en la consulta preparada: ' . $this->conexion->errorInfo()[2]);
        }

        $resultado = $statement->execute($datos);

        if (!$resultado) {
            throw new Exception('Error al ejecutar la consulta preparada: ' . $statement->errorInfo()[2]);
        }

        return $this->conexion->lastInsertId();
    }

    public function ejecutarConsultaPreparada($consulta, $parametros = []) {
        $statement = $this->conexion->prepare($consulta);

        if (!$statement) {
            throw new Exception('Error en la consulta preparada: ' . $this->conexion->errorInfo()[2]);
        }

        $resultado = $statement->execute($parametros);

        if (!$resultado) {
            throw new Exception('Error al ejecutar la consulta preparada: ' . $statement->errorInfo()[2]);
        }

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
 <!-- como usar -->
<?php

$conexion = new Conexion();
$db = $conexion->getConexion();

// Ahora puedes utilizar la conexión para ejecutar consultas, por ejemplo:
$statement = $db->query('SELECT * FROM tabla');
$resultado = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $fila) {
    // Procesar los datos...
}

// No olvides cerrar la conexión cuando hayas terminado:
$db = null;

?>
<!-- Prueba con consultas preparadas -->
<?php

$conexion = new Conexion();
$db = $conexion->getConexion();

$consulta = 'SELECT * FROM tabla WHERE columna1 = :valor1 AND columna2 = :valor2';
$parametros = array(':valor1' => $valor1, ':valor2' => $valor2);

try {
    $resultado = $conexion->ejecutarConsultaPreparada($consulta, $parametros);

    foreach ($resultado as $fila) {
        // Procesar los datos...
    }
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

$db = null;
?>
<!-- Prueba con inserciones preparadas -->
<?php

$conexion = new Conexion();
$db = $conexion->getConexion();

$tabla = 'nombre_de_la_tabla';
$datos = array(
    'columna1' => $valor1,
    'columna2' => $valor2,
    // ...
);

try {
    $insertId = $conexion->ejecutarInsercionPreparada($tabla, $datos);

    echo 'El ID del nuevo registro es: ' . $insertId;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

$db = null;
?>

<!-- actualizacines -->
<?php

$conexion = new Conexion();
$db = $conexion->getConexion();

$tabla = 'nombre_de_la_tabla';
$datos = array(
    'columna1' => $nuevoValor1,
    'columna2' => $nuevoValor2,
    // ...
);
$condicion = 'id = :id';
$parametros = array(':id' => $id);

try {
    $numFilasActualizadas = $conexion->ejecutarActualizacion($tabla, $datos, $condicion);

    echo 'Se han actualizado ' . $numFilasActualizadas . ' filas.';
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

$db = null;
