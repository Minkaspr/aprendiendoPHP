<?php
  $server="localhost";//127.0.0.1
  $username="root";
  $password="";


  //Usando mysqli
  $conexion1=new mysqli($server,$username,$password);
  if ($conexion1 -> connect_error) {
    die("Error al conectar: ".$conexion1 -> connect_error);
  }else{
    echo "Conexion exitosa...";
  }

  echo "<br/>";
  //usando try-catch y PDO
  try{
    //Realizamos la conexion
    $conexion2=new PDO("mysql:host=$server;dbname=album",$username, $password);
    $conexion2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";

  }catch(PDOException $error){
    echo "Conexion erronea".$error;
  }
?>