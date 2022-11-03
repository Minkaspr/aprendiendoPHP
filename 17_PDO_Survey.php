<?php
include_once '17_PDO_db.php';
class Survey extends DB
{
  private $totalVotes;
  private $optionSelectd;

  public function setOptionSelected($option){
    $this->optionSelectd = $option;
  }

  public function getOptionSelected(){
    return $this->optionSelectd;
  }

  public function vote(){
    $query = $this->connect()->prepare('UPDATE estaciones SET votos = votos +1 WHERE opcion = :opcion');
    $query->execute(['opcion'=>$this->optionSelectd]);
  }

  public function showResults(){
    return $this -> connect()->query('SELECT * FROM estaciones');
  }

  //prepare y execute se usa cuando se envia parametros y se evalua
  //si se usa solo query, es porque es una consulta generica

  public function getTotalVotes(){
    $query = $this -> connect()->query('SELECT SUM(votos) AS votos_totales FROM estaciones');
    $this->totalVotes = $query->fetch(PDO::FETCH_OBJ)->votos_totales;
    return $this -> totalVotes;
  }

  public function getPercentageVotes($votes){
    return  round(($votes / $this -> totalVotes)* 100 , 0);
  }
}
?>