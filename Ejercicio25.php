<?php
//Clases -- POO -- HERENCIA

class persona{

    public $nombre; //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){  //acciones o métodos
         $this->nombre=$nuevoNombre;
    }

    public function imrpimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){ //Creo un método que altera los datos y retorna ese mismo dato
        $this->edad=20;
        return $this->edad;

    }
}

class trabajador extends persona{ //Herencia
    public $puesto; //propiedad nueva

    public function presentarComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy una ".$this->puesto;
    }

}


$objTrabajador= new trabajador(); //instancia o creación d eun objeto
$objTrabajador->asignarNombre("Dahiana Monsalve"); //Lamando un método
$objTrabajador->puesto="desarrolladora"; // Propiedad

$objTrabajador->presentarComoTrabajador();

?>