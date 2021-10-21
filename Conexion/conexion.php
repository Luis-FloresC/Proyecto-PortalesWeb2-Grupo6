<?php

//Direccion del host
$host = $_SERVER['SERVER_NAME'];
///Base de Datos mysql
$bd = "bd_techno_factory";
//User
$user = "gemart";
//Contraseña
$contra = "Jamart1590@";

try {

    $conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$contra);
    if($conexion)
    {
        $var = "Conexion exitosa con la base de Datos...";
        echo "<script> alert('".$var."'); </script>";
    }
   
   
} catch (Exception $ex) {
   $var =  $ex->getMessage();
   echo $var; 
}



?>
