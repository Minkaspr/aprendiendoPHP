<?php
/**
 * Al importar archivos podemos usar
 * Require() - Si lo que importamos no existe, no permite que el programa se ejecute con normalidad
 * Include() - Si lo que importamos no existe, permite que el programa continue con su ejecucion
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #container{
      width: 500px;
      margin: 150px auto;
    }
    #footer{
      background-color: #222;
      padding: 10px;
      color: white;
    }
    #menu{
      background-color: #eee;
      padding: 10px;
    }
  </style>
</head>
<body>
  <div id="container">
    <?php
      require("10_Importar_menu.php");
    ?>
    <h3>Holaaa, Minkaspr te saluda :D</h3>
    <?php
      include("10_Importar_footer.php");
    ?>
  </div>
</body>
</html>