<?php
    //conectarse a mysql
    $conexion = mysqli_connect ("localhost","root","");

    // verificar la conexión 
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    //seleccionar la base de datos
    mysqli_select_db($conexion,"test") or die ("No existe la base/tabla");

    //enviamos una consulta en el servidor
    $sql="SELECT id_provincia, provincia FROM provincias WHERE id_provincia='35' ";

    if ($resultados = mysqli_query($conexion, $sql)) {
        //recorremos cada resultado
        echo "<table>";
        while($fila = mysqli_fetch_assoc($resultados))
            {
                echo "<tr><td align='right'>" . $fila['id_provincia'] . "</td><td> </td><td>" . $fila['provincia'] . "</td></tr>";
            }
        echo "</table>";
    }
    mysqli_close($conexion);
?>