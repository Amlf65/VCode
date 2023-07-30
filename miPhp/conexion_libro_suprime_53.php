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
    $sql="DELETE FROM paises WHERE id_pais='53' ";

    if ($resultados = mysqli_query($conexion, $sql)) {
        
            echo "$resultados registro(s) eliminado(s) ";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    }
    mysqli_close($conexion);
?>