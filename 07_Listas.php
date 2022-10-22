<?php

/**
 * Listas - ARRAY
 * 
 * Inicializan en 0
 */
$dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
//Imprime todo el array
print_r($dias);
//Imprime un posicion del array
echo "<br/>" . $dias[0] . "<br/>";
echo $dias[6] . "<br/>";

//contabiliza cuantos elementos tiene el array
echo count($dias) . " Dias <br/>";

echo "<hr>";

//Imprimimos los elementos de la lista o array recorriendo con un ciclo
for ($i = 0; $i < count($dias); $i++) {
  echo $dias[$i] . "<br/>";
}

echo "<hr>";

$j = 0;
while ($j < count($dias)) {
  echo $dias[$j] . "<br/>";
  $j++;
}

echo "<hr>";

$k = 0;
do {
  echo $dias[$k] . "<br/>";
  $k++;
} while ($k < count($dias));

echo "<hr>";

//Arreglo donde se especifica una clave y un valor
$edades = array("MinKaspr" => 23, "Nani" => 23, "Magui" => 18);
//clave= MinKaspr, valor = 23
print_r($edades);
echo "<br/>";
echo $edades['MinKaspr'];
echo "<br/>";

//For each -- arreglos asociativos
foreach ($edades as $key => $value) {
  echo $key . " tiene el valor de " . $value . "<br/>";
}

$fruta = array("Fresa", "Pera", "Manzana");
array_push($fruta, "Uva"); // agrega un elemento al array
print_r($fruta);
?>