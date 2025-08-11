<?php
//Clases -- POO

class persona{

    public $nombre; //Declaración de propiedades o atributos
    private $edad;
    protected $altura;

    //Constructor --> Construye a partir de la instancia
    //La asignación se hace directamente cuando creamos la intancia u objeto, en este caso pone el nombre desde la creación de la instacia, así: $objAlumno= new persona("Dahiana Monsalve");

    function __construct($nuevoNombre){

        $this->nombre=$nuevoNombre;

    }

    public function asignarNombre($nuevoNombre){ //acciones o métodos

        $this->nombre=$nuevoNombre;

    }

    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){ //Creo un método que altera los datos y retorna ese mismo dato
        
        $this->edad=20;
        return $this->edad;
    }
}
    

$objAlumno= new persona("Dahiana Monsalve "); //instancia o creación d eun objeto
//$objAlumno->asignarNombre("Dahiana"); //Lamando un método
$objAlumno->imprimirNombre(); //Lamando un método


?>