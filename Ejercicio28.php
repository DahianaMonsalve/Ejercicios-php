<?php

//Conexión a la BD
$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasena="MySQL123";


//Control de errores con try y catch--> Me devuelve los errores cometidos
try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario,$contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida";

}catch(PDOExeption $error){
    echo "Conexión erronea".$error;
}

?>