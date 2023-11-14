<?php

$servidor = "localhost";
$usuario = "root";
$contrasenia = "root";

try {
    // Hacer conexion a mysql
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    //Leer datos
    $sql = "SELECT * FROM `fotos`"; // Consultar los datos
    $sentencia = $conexion->prepare($sql); // Preparamos la seleccion
    $sentencia->execute(); // Ejecuto la seleccion
    $resultado = $sentencia->fetchAll(); // Obtengo los resultado

    //print_r($resultado); // mostrar todo los registros
    // Mostrar todos los datos que contiene nombre
    foreach($resultado as $foto){
        echo $foto['nombre']."<br/>";
    }

    echo "Conexion establecida";
} catch (PDOExepcion $error) {
    echo "Conexion Erronea".$error;
}

?>