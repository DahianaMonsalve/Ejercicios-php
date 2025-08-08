<?php

//Arreglos asociativos --> Cambio de índices

$frutas=array("f"=>"Fresa", "m"=>"Manzana", "p"=>"Pera");

print_r($frutas)."<br>";

//¿Cómo acceder a la información de los arreglos

echo $frutas["p"]."<br>";

foreach($frutas as $indice=>$valor){
   
    echo "El valor ".$valor." tiene el indice ". $indice."<br>";
}

?>