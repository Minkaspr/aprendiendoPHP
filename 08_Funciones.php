<?php
  //funciones
  function imprimirNombre($nombre,$apellido){
    //instrucciones
    echo "Hola ".$nombre." ".$apellido."<br/>";
  }

  //Llama a la funcion
  imprimirNombre("Dario","Quispe");

  //funcion que genera un numero aleatorio rand(min,max);
  $aleatorio=rand(1,10);
  echo $aleatorio;
?>