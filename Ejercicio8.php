<?php

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
    echo "<br>".$multiplicacion;
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
    <form action="Ejercicio8.php" method="post">
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