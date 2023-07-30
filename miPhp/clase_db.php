<?php
 class Db {
    public $conexion;

    function __construct(){
        $conexion=mysqli_connect("localhost","root","","test");
    }

    function __destruct(){
        mysqli_close($conexion);
    }

    function listado($sql){
        $resultados=mysqli_query($conexion,$sql);
        $salida=array();
        while($fila=mysqli_fetch_assoc($resultados)){
            $salida=$fila;
        }
        return $salida;
    }

    function sentencia($sql){
        if(mysqli_query($conexion,$sql)){
            return mysqli_affected_rows($conexion);
        }
    }
    function inserta($sql){
        if(mysqli_query($conexion,$sql)){
            return mysqli_insert_id($conexion);
        }
    }

    function error(){
        return mysqli_errno($conexion). "-" . mysqli_error($conexion);
    }
 }
?>