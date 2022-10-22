<?php
/**
 * GET
 * se visualiza la informacion en el url
 */
print_r($_GET);
echo "<br/>";
print_r($_GET['usuario']);
echo "<br/>";

$usuario=$_GET['usuario'];
$clave=$_GET['clave'];

echo "El usuario $usuario, su clave es: ".$clave."<br/>";

?>