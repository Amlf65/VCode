<?php

  
//   Ejercicio 2: Lenguaje PHP, nivel básico.
//   a)	(Con if else) Una empresa tiene los días de pago del 1 al 10 del mes, indicar dado el día del mes si "es día de pago" o estamos "fuera de plazo".
  $fecha=Date("d");
  if($fecha>10) {echo "fuera de plazo";} else { echo "es día de pago";};
  
echo "<br>";
//   b)	(Con switch) Un edificio de 5 pisos, indicar mediante una variable llamada "telefonillo", el piso al que se ha llamado mediante el mensaje "Ha pulsado el primer/segundo/…. piso"
  $telefonillo=3;
  switch ($telefonillo){
      case 1:
          echo "Ha pulsado el primer piso";
          break;
      case 2:
          echo "Ha pulsado el segundo piso";
          break;
      case 3:
          echo "Ha pulsado el tercer piso";
          break;
      case 4:
          echo "Ha pulsado el cuarto piso";
          break;
      case 5:
          echo "Ha pulsado el quinto piso";
          break;
      default:
          echo "No se ha pulsado ningún piso";
          break;
  }
  echo "<br>";
      
//   c)	(Con while) Realizaremos la tabla de multiplicar del 3, presentado la forma 3 * 1 = 3.
      $indice=1;
      while ($indice<10) {
          echo  "3 *  $indice  = " . 3 * $indice .  "<br>";
          $indice++;
      }
      echo "<br>";
//   d)	(Con for) Realizaremos una tabla con la función y=3x+4, en la que indicaremos para los valores de x entre 1 y 5 los valores y correspondientes de la forma x=1, y=?.  
      For($indice=1;$indice<=5;$indice++){
          echo  "x=" . $indice . ", y=" . 3* $indice + 4 . "<br>";
      }
      echo "<br>";
//   e)	Muestra la longitud del palíndromo "sobornos son robos"
  echo strlen("sobornos son robos");
  echo "<br>";
  
//   f)	Crea una cookie con el nombre "lenguaje", el valor "es", un tiempo de duración de 1 mes 
    setcookie ("lenguaje","es",time()+60*60*24*30);
    echo "<br>";
  
//   g)	Escribe por pantalla la cookie creada en el apartado anterior
    echo $_COOKIE["lenguaje"];
    echo "<br>";

//   h)	Crea una variable de sesión con el nombre de “equipo”, y el valor “docente”
    session_start();
    $_SESSION["equipo"]="docente";
    echo $_SESSION["equipo"];
    echo "<br>";

//   i)	Crea un archivo llamado “pie.php”  que contenga  un párrafo cuyo contenido sería Copyright ©2014 - <año actual>, y como sería la llamada para incorporarlo al footer de mi pagina web principal “index.php”  
//   Pie.php
    echo "<p>Copyright © 2014-" . date("Y") . "</p>";
    echo "<br>";
//  Index.php
    echo "<footer><?php include 'pie.php';?></footer>";

// j)	Y si fuese imprescindible el uso de ese fichero en mi página web
// Index.php
    echo "<footer><?php require 'pie.php';?></footer>";

?>