<?php
//Funciones para strings
$mensaje="Hoy aprenderas mas de php";
echo $mensaje."<br/>";
//Longitud
echo strlen($mensaje)."<br/>"; // Cuenta tambien los espacios en blanco

//Numero de palabras
echo str_word_count($mensaje)."<br/>"; //cuenta hasta grupos de una sola letra

//Reversa
echo strrev($mensaje)."<br/>"; 
//invierte el texto letra por letra - omite espacios laterales en blanco

//Encontrar texto
echo strpos($mensaje,"mas")."<br/>";
//muestra la posicion de la primera letra de la palabra

//Reemplazar texto
echo str_replace("php","PHP",$mensaje)."<br/>";
echo str_replace(" ","-",$mensaje)."<br/>";

//Convertir en minusculas
echo strtolower($mensaje)."<br/>";

//Convertir a mayusculas
echo strtoupper($mensaje)."<br/>";

//Comparar cadenas
echo strcmp("Hola","Mola")."<br/>";
echo strcmp("Poma","Mola")."<br/>";
echo strcmp("ir","venir")."<br/>";
echo strcmp("Hola","hola")."<br/>";
echo strcmp("hola","hola")."<br/>";
echo strcmp("a","e")."<br/>";
echo strcmp("A","0")."<br/>";
//arroja un valor numero, se compara en numero de byte del codigo ASCII
// 0 para igual

//Substraer cadena
echo substr($mensaje,10)."<br/>";
//elimina de izq. a der. las cantidades de caracteres, incluye espacios en blanco
echo substr($mensaje,10,2)."<br/>";
//elimina de izq. a der. las cantidades de caracteres, incluye espacios en blanco
//ademas deja la cantidad de caracteres y substrae el resto de caracteres

$mensaje2="        Hoooo ooo      l     aaaaaaa";
//Remover espacios en blanco
echo trim($mensaje2);
//reduce todos los espacios agrupados a uno solo
?>