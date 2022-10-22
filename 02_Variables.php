<?php
  //Variables
  $variable = 23;
  $nombre ="Minka";
  $altura =1.72;
  $vivo = true;

  //Anidar
  echo $nombre." ".$variable;
  print "Mi nombre es $nombre";
  echo "Estoy vivo? $vivo";
  print "Mi altura es $altura <br/>";

  //Tipos de datos
  //caracter
  $letra ="M";
  //entero
  $numero=45;
  //cadena
  $cadena="Mi nombre es MinKaspr";
  //flotante
  $decimal=3.1415;
  //booleano
  $verdad=true;
  //arreglo
  $cursos = array("PHP","JAVA","PYTHON");
  $horas = array(10,8,9);
  //nulos
  $nada = null;
  echo "Hola, ".$cadena."<br/>";
  print_r($cursos);
  print_r($horas);
?>