<?php

//Métodos estáticos

class unaClase{

	public static function unMetodo(){
		echo "Hola soy un método estático"."<br>";
	}

}

//Instanciando
$obj= new unaClase();
$obj->unMetodo();

//Acceder a un método sin instanciar
unaClase::unMetodo();

?>