<?php
//Clases
class persona {
  public $nombre;//propiedades
  private $edad; //solo lo accede la clase-metodos de donde se definio
  protected $altura;//encapsulamiento-solo se accede desde la misma clase 
  //y las clases heredades

  //acciones o metodos
  public function asignarNombre ($nuevoNombre){

    $this-> nombre = $nuevoNombre;
  }

  public function imprimirNombre(){
    echo "Hola soy ".$this->nombre;
  }

  public function mostrarEdad(){
    $this->edad=20;
    return $this->edad;
  }

}

$objAlumno = new persona();//POO-instancia o creacion de objeto
$objAlumno->asignarNombre("Dario");//lamada al metodo

$objAlumno2 = new persona();
$objAlumno2->asignarNombre(" Ruben");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre;//imprimir una propiedad
echo $objAlumno2->nombre;
echo $objAlumno2->mostrarEdad();

//Aplicando herencia
class trabajador extends persona{
  public $puesto;
  public function presentarseComoTrabajador(){
    echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
  }
}
$objTrabajador = new trabajador();
$objTrabajador ->asignarNombre("Dario Q.");
$objTrabajador ->puesto="profesor";

$objTrabajador ->presentarseComoTrabajador();

//metodo estatico
class unaClase{
  public static function unMetodo(){
    echo "Hola soy un metodo estático <br/>";
  }
}
//cuando no son metodos estaticos se usan estos
$obj=new unaClase();
$obj->unMetodo();

unaClase::unMetodo(); //para un metodo estatico se utiliza ello

?>