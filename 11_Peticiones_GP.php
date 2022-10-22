<?php
/**
 * PETICIONES GET Y POST
 */
?>
<form action="08_Peticiones_Post" method="POST">
  <label for="correo">Correo</label>
  <input type="email" id="correo" name="txtCorreo" placeholder="email@example.com"><br/>
  <label for="clave">Clave</label>
  <input type="password" id="clave" name="txtClave" placeholder="******"><br/>
  <input type="submit" value="Ingresar">
  <a href="08_Peticiones_Get.php?usuario=admin&clave=123456">Registrarse</a>
</form>