<?php
error_reporting(E_ERROR | E_PARSE);
 try{
$x="123";
//$z=4/0;
v_dni($y);
}catch (Error $e){
    echo "Error->: ". $e->getMessage();
}catch (Exception $e){
    echo "Exception: ". $e->getMessage();
}
function v_dni($dni){
   
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
}
/*
Exception
ErrorException
Error
ArgumentCountError
ArithmeticError
AssertionError
DivisionByZeroError
CompileError
ParseError
TypeError
ValueError
UnhandledMatchError
FiberError
*/
?>
