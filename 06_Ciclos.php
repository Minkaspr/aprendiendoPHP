<?php

/**
 * FOR
 */

//la cantidad de velas deben ser igual que la edad
$edad=23;
for ($i=1; $i <= $edad; $i++) { 
  //Inicia en 1, y repetira hasta que sea menor e igual que $edad
  echo "i";
}
echo "<br/>";

/**
 * WHILE
 */
//para el while inicializaremos el a en 1 para salir del ciclo
$a=1;
while($a != $edad){
  //mientras la condicion se cumpla se seguira repitiendo
  echo $a."<br/>";
  $a++;
}
//Imprime hasta el 22 porque en el 23 se rompe la condicion y no entra al bucle

/**
 * DO-WHILE
 */
$i=0;
do {
  echo "Numero: ".$i."<br/>";
  $i++;
} while ($i < 10);
?>