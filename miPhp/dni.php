<?php
$x="12345678z";
v_dni($x);
function v_dni($dni){
    if(strlen($dni)==9){
        $dni=strtoupper($dni);
        $cad1=substr($dni,0,8);
        $cad2=substr($dni,8,1);
        echo $cad1 . " // " . $cad2 . " // ";
        $pos=$cad1 % 23;
        echo $pos. " // ";
        $letra=substr("TRWAGMYFPDXBNJZSQVHLCKE",$pos,1);
        echo $letra. " // ";
        if ($letra==$cad2){
            echo "dni correcto";
        }else{
            echo "dni incorrecto";
        }
    }else{
        echo "numero de caracteres erroneos";
    }
}
?>
