<?php
$a=5;
$b=2;
echo "El valor de a= $a y el valor de b= $b<br/>";

//Suma
echo $a + $b."<br/>";

//Resta
echo $a - $b."<br/>";

//Multiplicacion
echo $a * $b."<br/>";

//Division
echo $a / $b."<br/>";

//Residuo
echo $a % $b."<br/>";

//Potencia
echo $a ** $b."<br/>";

echo "<hr>";
// $a=$b;
// echo $a."<br/>"; ahora 'a' valdra el valor de 'b'

//> a = a + b; -> a+=b 
$a += $b; 
echo $a."<br/>";

//> a = a - b; -> a-=b 
$a -= $b; 
echo $a."<br/>";

//> a = a * b; -> a*=b 
$a *= $b; 
echo $a."<br/>";

//Operadores de Comparacion
//Retornar boolean
$a1=2;
$b1=3;
$c1="3";

var_dump($a1 == $b1)."<br/>";
var_dump($a1 != $b1)."<br/>"; //no es igual
var_dump($b1 == $c1)."<br/>"; //sera verdad, por mas que uno sea numero y cadena
//para evitar igualdad entre un nunmero y caracter se usa la siguiente condicion
var_dump($b1 === $c1)."<br/>";
var_dump($b1 !== $c1)."<br/>";//no es identico
var_dump($a1 > $b1)."<br/>";
var_dump($a1 >= $b1)."<br/>";
var_dump($a1 < $b1)."<br/>";
var_dump($a1 <= $b1)."<br/>";
var_dump($a1 <> $b1)."<br/>";//diferente

//Operaciones de incremento y decremento
//a=a+a -> a++
echo $a++;

//a=a-a -> a--
echo $a--;

// && -> Iteracion
// =  -> Asignacion
// == -> Comparacion > Igualdad (No tiene en cuenta los tipos de variables)
// === -> Comparacion > Identico (Considera los tipos de variables)
?>