<?php

/**
 * CREATE TABLE `php_encuesta`.`estaciones` ( 
 * `id` INT NOT NULL AUTO_INCREMENT , 
 * `opcion` VARCHAR(255) NOT NULL , 
 * `votos` INT NOT NULL , 
 * PRIMARY KEY (`id`)
 * ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci;
 */
?>

<?php
/**
 * ORIENTADO A OBJETOS
 */
class DB
{
  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;

  public function __construct()
  {
    //this hace referencia al contexto de esta clase
    $this->host = 'localhost';
    $this->db = 'php_encuesta';
    $this->user = 'root';
    $this->password = '';
    $this->charset = 'UTF8';
  }

  public function connect()
  {
    try {
      $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;

      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
      ];

      $pdo=new PDO($connection,$this->user,$this->password,$options);
      
      return $pdo;
    } catch (PDOException $e) {
      print_r("Error connection: ".$e->getMessage());
    }
  }
}
?>