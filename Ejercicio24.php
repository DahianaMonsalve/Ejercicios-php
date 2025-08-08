<?php
//Clases -- POO

class persona{

    public $nombre; //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ //acciones o métodos

            $this->nombre=$nuevoNombre;

    }

    public function mostrarEdad(){ //Creo un método que altera los datos y retorna ese mismo dato
        $this->edad=20;
        return $this->edad;

    }
}


$objAlumno= new persona(); //instancia o creación d eun objeto
$objAlumno->asignarNombre("Dahiana"); //Lamando un método

$objAlumno2= new persona();
$objAlumno2->asignarNombre("Pedro");

echo $objAlumno->nombre;
echo $objAlumno->mostrarEdad();


echo $objAlumno2->nombre; //Imprimo una propiedad

?>