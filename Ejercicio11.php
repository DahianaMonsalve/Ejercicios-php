<?php

//

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //suma
    $suma=$valorA+$valorB;
    //resta
    $resta=$valorA-$valorB;
    //division
    $division=$valorA/$valorB;
    //multiplicicon
    $multiplicacion=$valorA*$valorB;

    echo "<br>".$suma;
    echo "<br>".$resta;
    echo "<br>".$division;
    echo "<br>".$multiplicacion."<br>";

    if ($valorA==$valorB){

        echo "El valor de A es igual que el valor de B"."<br>";
        
        if ($valorA==4){
            echo "El valor es 4"."<br>";
            
        }
        if ($valorA==5){
            echo "El valor es 5";
        }
    }
    if (($valorA==$valorB) && ($valorA==4)){
        echo "El valor de A es igual al de B y el valor es 4";
    } 
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    <form action="Ejercicio11.php" method="post">
        Valor A:
    <input type="number" name="valorA" id="">
    <br>

    Valor B:
    <input type="number" name="valorB" id="">
    <br>

    <input type="submit" value="Calcular">
</form>


</body>
</html>