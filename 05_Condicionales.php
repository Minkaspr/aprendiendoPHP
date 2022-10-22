<?php
//Condicionales

//if-else
$edad = 23;
if ($edad > 18 && $edad < 65) {
  echo "<h2>Podemos trabajar</h2>";
} else {
  echo "<h2>No se puede trabajar</h2>";
}

//if-else aninado
$hora = 19;
if ($hora >= 6 && $hora < 12) {
  echo "Dia";
} else if ($hora >= 12 && $hora < 19) {
  echo "Tarde";
} else {
  echo "Noche";
}

//switch
$boton = 2;

switch ($boton) {
  case 1:
    echo "Presiono 1";
    break;
  case 2:
    echo "Presiono 2";
    break;
  case 3:
    echo "Presiono 3";
    break;
}
?>