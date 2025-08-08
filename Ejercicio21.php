<?php
//Arreglos para almacenar información 

$frutas = array("Fresa", "Pera", "Manzana");

print_r($frutas);
echo "<br>";

echo $frutas[0]."<br>";

for($indice=0; $indice<3; $indice++){

    echo $frutas[$indice];
    echo "<br>";

}

?>