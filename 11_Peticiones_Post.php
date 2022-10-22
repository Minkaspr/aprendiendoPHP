<?php
/**
 * POST
 * No se visualiza la informacion en el url
 */
print_r($_POST);
echo "<br/>";
print_r($_POST['txtCorreo']);
echo "<br/>";
print_r($_POST['txtClave']);

echo "<hr>";
$correo = $_POST['txtCorreo'];
$clave = $_POST['txtClave'];

echo "El usuario tiene como correo $correo <br/>";
echo "Su clave es: ".$clave."<br/>";
?>