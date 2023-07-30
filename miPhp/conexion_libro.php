<?php
    //conectarse a mysql
    $conexion = mysql_connect("localhost","root","");

    //seleccionar la base de datos
    mysql_select_db("test.php", $conexion);

    //enviamos una consulta en el servidor
    $sql="SELECT id_provincia, provincia FROM provincias";
    $resultados=mysql_query($sql,$conexion);

    //recorremos cada resultado
    echo "<ul>";
    while($fila=mysql_fetch_assoc(resultados)){
        {
            echo "<li>" . $fila['provincia'] . "<li>";
        }
    echo "</echo>";
    mysql_close($conexion);
    
    };
?>