<?php
$txtNombre = "";
$radioGrupo = "";

$checkDia = "";
$checkTarde = "";
$checkNoche = "";

$nivel = "";

$txtComentario="";

if ($_POST) {

  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : ""; //if ternario
  $radioGrupo = (isset($_POST['gusto'])) ? $_POST['gusto'] : "";

  $checkDia = (isset($_POST['checkDia']) == "si") ? "checked" : "";
  $checkTarde = (isset($_POST['checkTarde']) == "si") ? "checked" : "";
  $checkNoche = (isset($_POST['checkNoche']) == "si") ? "checked" : "";

  $nivel = (isset($_POST['nivel'])) ? $_POST['nivel'] : "";

  $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario'] : "";

  //print_r($_POST);
  //print_R($nivel);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- Codigo enbebido -->
  <?php if ($_POST) { ?>
    <h3>Hola :<strong><?php echo $txtNombre; ?></strong></h3>

    <h4>Te gusta <strong><?php echo $radioGrupo; ?></strong></h4>

    <h5>Tu horario de preferencia es es : 
      <strong>
        <?php echo ($checkDia == "checked")?"Dia":""; ?>
        <?php echo ($checkTarde == "checked")?"Tarde":""; ?>
        <?php echo ($checkNoche == "checked")?"Noche":""; ?>
      </strong>
    </h5>
    <h5>Tu nivel es : <strong><?php echo $nivel; ?></strong></h5>

    <h5>Tu mensaje es: <strong> <?php echo $txtComentario?> </strong></h5>
    <hr>
  <?php } ?>

  <form action="12_PreservarValores.php" method="post">
    <label for="Nombre">Nombre</label>
    <input type="text" name="txtNombre" id="Nombre" value="<?php echo $txtNombre ?>">
    <br />

    <!-- radio buttons -->
    <label>¿Frio o Calor o tropical?</label><br />
    <input type="radio" name="gusto" id="frio" value="frio" <?php echo ($radioGrupo == "frio") ? "checked" : "" ?>><label for="frio">frio</label><br />
    <input type="radio" name="gusto" id="calor" value="calor" <?php echo ($radioGrupo == "calor") ? "checked" : "" ?>><label for="calor">calor</label><br />
    <input type="radio" name="gusto" id="tropical" value="tropical" <?php echo ($radioGrupo == "tropical") ? "checked" : "" ?>><label for="tropical">tropical</label><br />

    <!-- check list -->
    <p>Cuales son los horarios de tu preferencia</p>
    <input type="checkbox" name="checkDia" <?php echo $checkDia; ?> value="si" id="dia"><label for="dia">dia</label>
    <input type="checkbox" name="checkTarde" <?php echo $checkTarde; ?> value="si" id="tarde"><label for="tarde">tarde</label>
    <input type="checkbox" name="checkNoche" <?php echo $checkNoche; ?> value="si" id="noche"><label for="noche">noche</label><br />


    <!-- select option -->
    Escoge tu nivel
    <select name="nivel" id="">
      <option selected disabled="disabled">Selecciona</option>
      <option value="1" <?php echo ($nivel == "1") ? "selected" : "" ?>>1</option>
      <option value="2" <?php echo ($nivel == "2") ? "selected" : "" ?>>2</option>
      <option value="3" <?php echo ($nivel == "3") ? "selected" : "" ?>>3</option>
    </select><br />

    <!-- text Area -->
    ¿Tienes alguna duda?<br/>
    <textarea name="txtComentario" id="" cols="30" rows="10">
      <?php echo $txtComentario; ?>
    </textarea>
    <!-- submit -->
    <br /><br /><input type="submit" value="Enviar Informacion">
  </form>
</body>

</html>