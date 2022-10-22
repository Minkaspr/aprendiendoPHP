<?php

/**
 * Validar por parte del servidor
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
    form {
      background-color: white;
      padding: 10px;
      margin: 100px auto;
      width: 400px;
    }

    input[type=text],
    input[type=email],
    input[type=password] {
      padding: 10px;
      width: 380px;
    }

    input[type="submit"] {
      border: 0;
      background-color: #ED8824;
      padding: 10px 20px;
    }

    .error {
      background-color: red;
      font-size: 12px;
      padding: 10px;
    }

    .correcto {
      background-color: #A0DEA7;
      font-size: 12px;
      padding: 10px;
    }
  </style>
</head>

<body>
  <form action="09_ValidarFormulario.php" method="POST">
    <?php
    //Declarar variables
    $nombre = "";
    $password = "";
    $email = "";
    $pais = "";
    $nivel = "";
    $lenguajes = array();

    //validamos que existe una solicitud de post, validar si existe -> isset()
    if (isset($_POST['nombre'])) {
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $clave = $_POST['clave'];
      $pais = $_POST['pais'];
      
      if(isset($_POST['nivel'])){
        $nivel = $_POST['nivel'];
      }else{
        $nivel = "";
      }

      if(isset($_POST['lenguajes'])){
        $lenguajes = $_POST['lenguajes'];
      }else{
        $lenguajes =[];
      }

      $mensajeError = array();
      if ($nombre == "") {
        array_push($mensajeError, "El campo nombre no puede estar vacio");
      }
      if ($pais == "") {
        array_push($mensajeError, "Seleccione un pais de origen");
      }
      if ($nivel==""){
        array_push($mensajeError, "Seleccione su nivel de desarrollo");
      }      
      if($lenguajes == "" || count($lenguajes)<2){
        array_push($mensajeError, "Seleccione al menos 2 lenguajes");
      }
      if ($correo == "" || strpos($correo, "@") === false) {
        array_push($mensajeError, "El campo correo no puede estar vacio, y debe contener @");
      }
      if ($clave == "" || strlen($clave) < 6) {
        array_push($mensajeError, "El campo clave no puede estar vacio, ni tener menos de 6 caracteres");
      }

      //Para mostrar el mensaje de errores
      if (count($mensajeError) > 0) {
        echo "<div class='error'>";
        for ($i = 0; $i < count($mensajeError); $i++) {
          echo "<li>" . $mensajeError[$i] . "</li>";
        }
      } else {
        echo "<div class='correcto'> Datos Correctos";
      }
      echo "</div>";
    }
    ?>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="<?=$nombre?>"><br />
    <label>Pais de Origen</label><br/>
    <select name="pais" id="">
      <option value="">Selecciona un pais</option>
      <option value="mx" <?php if ($pais == "mx") {
                            echo "selected";
                          } ?>>Mexico</option>
      <option value="eu" <?php if ($pais == "eu") {
                            echo "selected";
                          } ?>>Estados Unidos</option>
      <option value="es" <?php if ($pais == "es") {
                            echo "selected";
                          } ?>>España</option>
      <option value="ar" <?php if ($pais == "ar") {
                            echo "selected";
                          } ?>>Argentina</option>
    </select><br/>
    <label for="nivel">Nivel de desarrollo</label><br/>
    <input type="radio" name="nivel" value="principiante" <?php if($nivel=="principiante") echo "checked";?>>Principiante
    <input type="radio" name="nivel" value="intermedio" <?php if($nivel=="intermedio"){echo "checked";}?>>Intermedio
    <input type="radio" name="nivel" value="avanzado" <?php if($nivel=="avanzado") {echo "checked";}?>>Avanzado<br/>
    <label>Lenguajes de Programacion</label><br/>
    <input type="checkbox" name="lenguajes[]" value="php"<?php if(in_array("php",$lenguajes)){echo "checked";}?> >PHP <br/>
    <input type="checkbox" name="lenguajes[]" value="js" <?php if(in_array("js",$lenguajes))echo "checked";?> >Javascript <br/>
    <input type="checkbox" name="lenguajes[]" value="java" <?php if(in_array("java",$lenguajes))echo "checked";?>>Java <br/>
    <input type="checkbox" name="lenguajes[]" value="swift" <?php if(in_array("swift",$lenguajes))echo "checked";?>>Swift <br/>
    <input type="checkbox" name="lenguajes[]" value="py" <?php if(in_array("py",$lenguajes))echo "checked";?>>Python <br/>
    <label for="correo">Correo</label>
    <input type="email" name="correo" id="correo" value="<?php echo $correo;?>"><br />
    <label for="clave">Clave</label>
    <input type="password" name="clave" id="clave" value="<?php echo $clave;?>"><br />
    <input type="submit" value="Enviar Datos">
  </form>
</body>

</html>