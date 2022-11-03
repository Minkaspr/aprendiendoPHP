<?php

/**
 * Tabla donde se trabajará el CRUD
 * 
 * CREATE TABLE `php_db`.`php_tabla1` ( 
 * `id` INT NOT NULL AUTO_INCREMENT , 
 * `texto` VARCHAR(100) NOT NULL , 
 * `completado` TINYINT(1) NOT NULL , 
 * `timestamp` TIMESTAMP NOT NULL , 
 * PRIMARY KEY (`id`)
 * ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
 * 
 * timestamp ->Predeterminado : CURRENT_TIMESTAMP, Atributo & Extra: ON UPDATE CURRENT_TIMESTAMP
 */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div id="main-container">

    <form action="16_CRUD_MySQL_mysqli.php" method="POST">
      <label for="texto">Ingrese el texto</label>
      <input type="text" name="texto" id="texto">
      <input type="submit" value="añadir">
    </form>
    <div id="mostrar-todo-container">
      <form id="forMostrarTodo" action="16_CRUD_MySQL_mysqli.php" method="POST">
        <input type="checkbox" name="mostrar-todo" onchange="mostrarTodo(this)">Mostrar todo
      </form>
    </div>
    <div id="todoList">
      <?php
      //Conexion a la bd
      $server = "localhost";
      $username = "root";
      $password = "";
      $db = "php_db";

      $conexion1 = new mysqli($server, $username, $password, $db);
      if ($conexion1->connect_error) {
        die("Error al conectar: " . $conexion1->connect_error);
      } else {
        echo "Conexion exitosa...";
      }

      /**
       * CREATE
       */

      if (isset($_POST['texto'])) {
        $texto = $_POST['texto'];

        $sql = "INSERT INTO php_tabla1 (texto,completado) VALUES ('$texto',false)";
        if ($conexion1->query($sql) === true) {
        } else {
          die("Error al insertar datos" . $conexion1->error);
        }

        /**
         * UPDATE
         */
      } else if (isset($_POST['completar'])) {
        $id = $_POST['completar'];
        $sql = "UPDATE php_tabla1 SET completado = 1 WHERE id = $id";

        if ($conexion1->query($sql) === true) {
        } else {
          die("Error al actualizar los datos" . $conexion1->error);
        }
      } else if (isset($_POST['eliminar'])) {
        $id = $_POST['eliminar'];
        $sql = "DELETE FROM php_tabla1 WHERE id = $id";

        if ($conexion1->query($sql) === true) {
        } else {
          die("Error al eliminar el dato" . $conexion1->error);
        }
      }

      $sql="";
      if (isset($_POST['mostrar-todo'])) {
        $ordenar = $_POST['mostrar-todo'];

        if ($ordenar == "on") {
          $sql = "SELECT * FROM php_tabla1";
        }

      }else{
        $sql = "SELECT * FROM php_tabla1 WHERE completado = 0";
      }

      /**
       * READ
       */
      $resultado = $conexion1->query($sql);

      if ($resultado->num_rows > 0) {
        //echo $resultado->num_rows; Muestra la cantidad de filas
        while ($row = $resultado->fetch_assoc()) {
          //var_dump($row); Muestra las filas en formato de arreglos
          //echo '<div><form action=""><input type="checkbox"/>'.$row['texto'].'</form></div>';
      ?>
          <div>
            <form id="form<?php echo $row['id']; ?>" action="" method="POST">
              <input name="completar" value="<?php echo $row['id']; ?>" id="<?php echo $row['id']; ?>" type="checkbox" onchange="completarPendiente(this)" /><?= $row['texto']; ?>
            </form>
            <form method="POST" id="form_eliminar_<?php echo $row['id']; ?>" action="16_CRUD_MySQL_mysqli.php">
              <input type="hidden" name="eliminar" value="<?php echo $row['id'] ?>" />
              <input type="submit" value="Eliminar">
            </form>
          </div>
      <?php
        }
      }
      /**
       * DELETE
       */

      $conexion1->close();
      ?>
    </div>
  </div>

  <script>
    function completarPendiente(e) {
      var id = "form" + e.id;
      var formulario = document.getElementById(id);
      formulario.submit();
    }

    function mostrarTodo(e) {
      var formulario = document.getElementById("forMostrarTodo");
      formulario.submit();
    }
  </script>
</body>

</html>