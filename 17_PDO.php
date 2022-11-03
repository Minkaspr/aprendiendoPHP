<?php
include_once '17_PDO_Survey.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/17_PDO.css">
</head>

<body>
  <form action="#" method="POST">
    <?php
    $survey = new Survey();
    $showResults = false;

    if (isset($_POST['estacion'])) {
      $showResults = true;
      $survey->setOptionSelected($_POST['estacion']);
      $survey->vote();
    }

    ?>
    <h2>¿Cual es tu estación del año favorita?</h2>
    <?php
    if ($showResults) {
      $estaciones = $survey->showResults();
      echo '<h2>' . $survey->getTotalVotes() . '</h2>';

      foreach ($estaciones as $estacion) {
        $porcentaje = $survey->getPercentageVotes($estacion['votos']);
    ?>
        <div class="opcion">
          <?php
          $widthBar = $porcentaje * 5;
          $estilo = "barra";

          if ($survey->getOptionSelected() == $estacion['opcion']) {
            $estilo = "seleccionado";
          }
          echo $estacion['opcion'];
          ?>
          <div class="<?php echo $estilo; ?>" style="width: <?php echo $widthBar . 'px;' ?>">
            <?php echo $porcentaje . '%' ?>
          </div>
        </div>

      <?php
      }
    } else {
      ?>
      <input type="radio" name="estacion" id="" value="verano">verano<br />
      <input type="radio" name="estacion" id="" value="invierno">invierno<br />
      <input type="radio" name="estacion" id="" value="primavera">primavera<br />
      <input type="radio" name="estacion" id="" value="otono">otoño<br />
      <input type="submit" value="votar">
    <?php
    }
    ?>

  </form>


 

</body>

</html>