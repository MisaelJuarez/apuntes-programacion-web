<?php

$servidor = "localhost";
$usuario = "root";
$contrasenia = "root";

try {
    // Hacer conexion a mysql
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // Insertar datos
    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Imagen 2 de programacion', 'foto2.jpg');";
    // exec ejecuta instrucciones de mysql
    $conexion->exec($sql); 

    echo "Conexion establecida";
} catch (PDOExepcion $error) {
    echo "Conexion Erronea".$error;
}

?>